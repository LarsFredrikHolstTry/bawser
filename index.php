<?php

ob_start();

$lang = json_decode(file_get_contents('languages/en.json'));

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
	</head>
	<body>
		<div class="container">
			<div class="content">
				<?php include 'components/top_menu.php' ?>
				<div class="app">
					<?php include 'components/left_menu.php' ?>
					<div class="main_content">
						
					</div>
					<?php include 'components/right_menu.php' ?>
				</div>
			</div>
		</div>
	</body>
</html>