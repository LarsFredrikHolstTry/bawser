<?php

require_once '../../db/GrumpyPDO.php';
require_once '../../env.php';
$db = new GrumpyPdo($ENV_host, $ENV_user, $ENV_password, $ENV_db);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

$usernameExist = $db->run("SELECT ACC_name FROM account WHERE ACC_name = ?", [$username])->fetchAll();

if($password != $repeatPassword){
	echo 'Ikke lik passord ' . '<|>' . 'error';
} elseif(strlen($username) < 3 || strlen($username) > 20){
	echo 'Brukernavnet må være mellom 3 og 20 tegn ' . '<|>' . 'error';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'Emailen er ikke gyldig ' . '<|>' . 'error';
} elseif($usernameExist){
	echo 'Brukernavnet eksisterer fra før ' . '<|>' . 'error';
} else {
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	echo 'Du er registrert! ' . '<|>' . 'success';
}
