<?php

require_once '../../db/GrumpyPDO.php';
require_once '../../env.php';
$db = new GrumpyPdo($ENV_host, $ENV_user, $ENV_password, $ENV_db);

$username = $_POST['username'];
$password = $_POST['password'];

$account = $db->run("SELECT ACC_id, ACC_password FROM account WHERE ACC_name = ?", [$username])->fetch();

if(!$account){
	echo 'Brukernavnet eksisterer ikke ' . '<|>' . 'error';
} elseif(!password_verify($password, $account['ACC_password'])) {
	echo 'Feil passord. Bruk glemt passord funksjonen dersom du ikke husker ditt passord ' . '<|>' . 'error';
} else {
	session_start();
	$_SESSION['ID'] = $account['ACC_id'];
	echo $_SESSION['ID'] . '<|>' . 'success';
}	

