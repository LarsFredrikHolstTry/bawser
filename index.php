<?php

ob_start();

if (!session_id()) {
	session_start();
}

require_once 'functions/alerts.php';
require_once 'functions/date.php';
require_once 'env.php';
require_once 'db/GrumpyPDO.php';

$lang = json_decode(file_get_contents('languages/'.$ENV_language.'.json'));
$db = new GrumpyPdo($ENV_host, $ENV_user, $ENV_password, $ENV_db);

if (!isset($_SESSION['ID'])) {
	header("Location: homepage");
	exit();
}

/**
 * TODO: Find a better way to do this.
 */
$db->run("UPDATE account SET ACC_last_active = ".time()." WHERE ACC_id = ".$_SESSION['ID']);

$account = $db->run("SELECT * FROM account WHERE ACC_id = ".$_SESSION['ID']."")->fetch();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styling/styling.css" />
		<title>Bawser</title>
		<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
		<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
		<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<?php include 'components/mobile/mobile_header.php'; ?>
				<?php include 'components/top_menu.php' ?>
				<?php include 'components/mobile/mobile_footer.php' ?>
				<div class="app">
					<?php include 'components/left_menu.php' ?>
						<?php

							if (isset($_GET['page'])) {
								$filename = "app/" . $_GET['page'] . "/" . $_GET['page'] . ".php";
								if (file_exists($filename)) {
										include "app/" . $_GET['page'] . "/" . $_GET['page'] . ".php";
								} else {
									include "app/404/404.php";
								}
							} else {
								include "app/homepage/homepage.php";
							}
						?>
					<?php include 'components/right_menu.php' ?>
				</div>
			</div>
		</div>
	</body>
</html>