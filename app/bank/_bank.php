<?php

// TODO: Refactor this
if(isset($_POST['money_in'])){
	$amount = remove_space($_POST['amount']);
	$allMoney = isset($_POST['all_money']) ? true : false;

	if($allMoney){
		$updates = [
			'bankMoney' => $user_values['UV_money'],
			'money' => $user_values['UV_money'],
			'id' => $_SESSION['ID']
		];
		$db->run("UPDATE 
		user_values 
		SET 
			UV_bank_money = UV_bank_money + :bankMoney,
			UV_money = UV_money - :money
		WHERE 
			UV_acc_id = :id", $updates);

		header("Location: ?page=bank&money_in=".$user_values['UV_money']);
	} else {
		if(is_numeric($amount) && $amount > 0){
			if($amount > $user_values['UV_money']){
				echo alert('error', 'Du kan ikke sette inn mer penger på sparekontoen enn du har på brukskontoen');
			} else {
				$updates = [
					'bankMoney' => $amount,
					'money' => $amount,
					'id' => $_SESSION['ID']
				];
				$db->run("UPDATE 
				user_values 
				SET 
					UV_bank_money = UV_bank_money + :bankMoney,
					UV_money = UV_money - :money
				WHERE 
					UV_acc_id = :id", $updates);

				header("Location: ?page=bank&money_in=".$user_values['UV_money']);
			}
		} else {
			echo alert('error', 'Ugyldig input');
		}
	}
}

if(isset($_POST['money_out'])){
	$amount = remove_space($_POST['amount']);
	$allMoney = isset($_POST['all_money']) ? true : false;

	if($allMoney){
		$updates = [
			'bankMoney' => $user_values['UV_bank_money'],
			'money' => $user_values['UV_bank_money'],
			'id' => $_SESSION['ID']
		];
		$db->run("UPDATE 
		user_values 
		SET 
			UV_bank_money = UV_bank_money - :bankMoney,
			UV_money = UV_money + :money
		WHERE 
			UV_acc_id = :id", $updates);

		header("Location: ?page=bank&money_out=".$user_values['UV_money']);
	} else {
		if(is_numeric($amount) && $amount > 0){
			if($amount > $user_values['UV_bank_money']){
				echo alert('error', 'Du kan ikke ta ut mer penger enn du har på sparekontoen');
			} else {
				$updates = [
					'bankMoney' => $amount,
					'money' => $amount,
					'id' => $_SESSION['ID']
				];
				$db->run("UPDATE 
				user_values 
				SET 
					UV_bank_money = UV_bank_money - :bankMoney,
					UV_money = UV_money + :money
				WHERE 
					UV_acc_id = :id", $updates);

				header("Location: ?page=bank&money_out=".$user_values['UV_money']);
			}
		} else {
			echo alert('error', 'Ugyldig input');
		}
	}
}

if(isset($_GET['money_in'])){
	echo alert('success', 'Du satt inn '.number($_GET['money_in']).'kr på sparekontoen');
}

if(isset($_GET['money_out'])){
	echo alert('success', 'Du tok ut '.number($_GET['money_out']).'kr fra sparekontoen');
}