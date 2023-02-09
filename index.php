<?php

ob_start();

if (!session_id()) {
	session_start();
}

require_once 'functions/alerts.php';
require_once 'functions/date.php';
require_once 'functions/cities.php';
require_once 'functions/number.php';
require_once 'functions/ranks.php';
require_once 'functions/cooldown.php';
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

$account 						= $db->run("SELECT * FROM account WHERE ACC_id = ".$_SESSION['ID'])->fetch();
$user_values 				= $db->run("SELECT * FROM user_values WHERE UV_acc_id = ".$_SESSION['ID'])->fetch();
$myGangMembership 	= $db->run("SELECT * FROM gang_members WHERE GAME_acc_id = ".$_SESSION['ID'])->fetch() ?? null;
if($myGangMembership != null){
	$myGang 						= $db->run("SELECT * FROM gang WHERE GANG_id = ".$myGangMembership['GAME_gang'])->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styling/styling.css" />
		<title>Bawser</title>
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.tiny.cloud/1/4vo9pq3l206pg9640lozx073tggj0afph407ddaitgm169ok/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	  <script src="js/tinymceInit.js"></script>
	  <script src="js/time.js"></script>
		<script src="js/cooldown.js"></script>
	</head>
	<body onload="startTime(); startDate();">
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
