<?php

ob_start();

$lang = json_decode(file_get_contents('../languages/en.json'));
include '../functions/alerts.php';
require_once '../env.php';
require_once '../db/GrumpyPDO.php';
$db = new GrumpyPdo($ENV_host, $ENV_user, $ENV_password, $ENV_db);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../styling/styling.css" />
		<title>Bawser</title>
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<?php // include 'homepage/components/mobile/mobile_header.php'; ?>
				<?php include 'components/top_menu.php' ?>
				<div class="app">
					<?php include 'components/left_menu.php' ?>
						<?php

							if (isset($_GET['page'])) {
								$filename = $_GET['page'] . ".php";
								if (file_exists($filename)) {
										include $_GET['page'] . ".php";
								} else {
									include "homepage/404/404.php";
								}
							} else {
								include "homepage.php";
							}

						?>
					<?php include 'components/right_menu.php' ?>
				</div>
			</div>
		</div>
	</body>
</html>