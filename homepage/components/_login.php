<?php

require_once '../../db/GrumpyPDO.php';
require_once '../../env.php';
$db = new GrumpyPdo($ENV_host, $ENV_user, $ENV_password, $ENV_db);

$username = $_POST['username'];
$password = $_POST['password'];

$account = $db->run("SELECT * FROM account WHERE ACC_name = ?", [$username])->fetch();

if(!$account){
	echo 'Brukernavnet eksisterer ikke ' . '<|>' . 'error';
} elseif(!password_verify($password, $account['ACC_password'])) {
	echo 'Feil passord ' . '<|>' . 'error';
} else {
	$ACC_id = 0;
	$_SESSION['ID'] = $ACC_id;

	header("Location: index.php");
}	

