<?php

$profilePicture = $db->run("SELECT PROPIC_acc_id FROM profile_picture WHERE PROPIC_acc_id = ".$_SESSION['ID']." AND PROPIC_active = 1")->fetchColumn();
$profile = $db->run("SELECT PRO_text FROM profiles WHERE PRO_acc_id = ?", [$_SESSION['ID']])->fetchColumn();

$avatar = $profilePicture['PROPIC_acc_id'] ?? 'images/pb/standard.jpg';

if(isset($_POST['changePassword'])){
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];
	$repeatNewPassword = $_POST['repeatNewPassword'];

	if(!password_verify($oldPassword, $account['ACC_password'])){
		echo alert('error', 'Ikke riktig passord');
	} elseif($newPassword != $repeatNewPassword){
		echo alert('error', 'De to nye passordene stemmer ikke overens');
	} else {
		$hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

		$db->run("UPDATE account SET ACC_password = ? WHERE ACC_id = ?", [$hashed_password, $_SESSION['ID']]);

		echo alert('success', 'Passordet er endret!');
	}
}

if(isset($_POST['saveProfile'])){
	$profile_text = $_POST['profileText'];

	if($db->run("SELECT * FROM profiles WHERE PRO_acc_id = ?", [$_SESSION['ID']])->fetch()){
		$db->run("UPDATE profiles SET PRO_text = ?, PRO_last_edited = ? WHERE PRO_acc_id = ?", [$profile_text, time(), $_SESSION['ID']]);
	} else {
		$values = [
			'PRO_acc_id' => $_SESSION['ID'],
			'PRO_text' => $profile_text,
			'PRO_last_edited' => time(),
		];
		$db->insert('profiles', $values);
	}
	
	header("Location: ?page=settings&updateprofile");
}

if(isset($_POST['uploadAvatar'])){
	if(isset($_FILES['file'])){
		if ($_FILES["file"]["size"] > 500000) {
			echo alert('error', 'Bildet kan ikke være større enn 500kb');
		} elseif (0 < $_FILES['file']['error']) {
			echo alert('error', $_FILES['file']['error']);
		} else {
			$name = $_FILES['file']['name'];
			$target_dir = "images/pb";
			$target_dir_really = "images/pb";
			$target_file = $target_dir . time() . "-" .  basename($_FILES["file"]["name"]);

			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$extensions_arr = array("jpg","jpeg","png","gif");

			if(in_array($imageFileType, $extensions_arr)){
				$db->run("UPDATE profile_picture SET PROPIC_active = 0 WHERE PROPIC_active = 1 AND PROPIC_acc_id = ?", [$_SESSION['ID']]);

				$values = [
					[
						'PROPIC_acc_id' => $_SESSION['ID'],
						'PROPIC_src' => $target_file,
						'PROPIC_date' => time(),
						'PROPIC_active' => 1,
						'PROPIC_size' => $_FILES["file"]["size"]
					]
				];
				$db->insert('profile_picture', $values);
				move_uploaded_file(
						$_FILES['file']['tmp_name'],
						$target_dir_really. time() . "-" .$name
				);
				echo alert('success', 'Avataret ble lastet opp');
			} else {
					echo alert('error', 'Ugyldig filtype');
			}
		}
	} else {
		echo alert('error', 'Uventet feil');
	}
}

if(isset($_GET['updateprofile'])){
	echo alert('success', 'Profilen ble oppdatert');
}
