<?php

function setCooldown($db, $user, $type, $time) {
	$cooldown = $db->run("SELECT CD_time FROM cooldown WHERE CD_type = ? AND CD_acc_id = ?", [$type, $user])->fetchColumn();

	if(!$cooldown){
		$values = [
			[
				'CD_acc_id' => $user,
				'CD_type' => $type,
				'CD_time' => $time,
			]
		];
		$db->insert('cooldown', $values);
	} else {
		$db->run("UPDATE cooldown SET CD_time = ? WHERE CD_acc_id = ?", [$time, $user]);
	}
};

function isReady($db, $user, $type) {
	$cooldown = $db->run("SELECT CD_time FROM cooldown WHERE CD_type = ? AND CD_acc_id = ?", [$type, $user])->fetchColumn();

	if(!$cooldown){
		return true;
	} else {
		if($cooldown >= time()){
			return false;
		} else {
			return true;
		}
	}
};

function getCooldown($db, $user, $type){
	$cooldown = $db->run("SELECT CD_time FROM cooldown WHERE CD_type = ? AND CD_acc_id = ?", [$type, $user])->fetchColumn();

	if(!$cooldown){
		return 0;
	} else {
		return $cooldown - time();
	}
}