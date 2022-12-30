<?php

require_once '../../db/GrumpyPDO.php';
require_once '../../env.php';
$db = new GrumpyPdo($ENV_host, $ENV_user, $ENV_password, $ENV_db);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

$usernameExist = $db->run("SELECT ACC_name FROM account WHERE ACC_name = ?", [$username])->fetchAll();
$emailExist = $db->run("SELECT ACC_mail FROM account WHERE ACC_mail = ?", [$email])->fetchAll();

if($password != $repeatPassword){
	echo 'Passordene stemmer ikke overens med hverandre ' . '<|>' . 'error';
} elseif(strlen($username) < 3 || strlen($username) > 20){
	echo 'Brukernavnet må være mellom 3 og 20 tegn ' . '<|>' . 'error';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'Emailen er ikke gyldig ' . '<|>' . 'error';
} elseif($emailExist){
	echo 'E-posten eksisterer fra før ' . '<|>' . 'error';
} elseif($usernameExist){
	echo 'Brukernavnet eksisterer fra før ' . '<|>' . 'error';
} elseif(preg_match("/^[a-zA-Z0-9]+$/", $username) != 1) {
	echo 'Brukernavnet kan kun inneholde a-z, A-Z og 0-9 ' . '<|>' . 'error';
} else {
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$values = [
		'ACC_name' => $username,
		'ACC_password' => $hashed_password,
		'ACC_mail' => $email,
		'ACC_register' => time(),
		'ACC_last_active' => time(),
	];
	$db->insert('account', $values);
	$ACC_id = $db->lastInsertId();

	$values = [
		'VERI_uniqid' => uniqid(),
		'VERI_acc_id' => $ACC_id,
		'VERI_date' => time(),
	];
	$db->insert('verification', $values);

	$_SESSION['ID'] = $ACC_id;

	echo 'Du er registrert! ' . '<|>' . 'success';
}	

