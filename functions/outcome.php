<?php

function setOutcome($db, $acc_id, $type, $success){
	$values = [
		[
			'FUOU_acc_id' => $acc_id,
			'FUOU_success' => $success ? 1 : 0,
			'FUOU_date' => time(),
			'FUOU_type' => $type,
		]
	];
	$db->insert('function_outcomes', $values);
}

function getOutcomeAmount($db, $success, $acc_id, $type, $alternative, $from, $to){
	if(strlen($from) != 15 && strlen($to) != 15){
		$from = 0;
		$to = time();
	}

	$isSuccess = $success ? 1 : 0;

	return $db->run("
	SELECT 
		COUNT(*) 
	FROM 
		function_outcomes 
	WHERE 
		FUOU_acc_id = ? AND
		FUOU_alternative = ? AND
		FUOU_type = ? AND
		FUOU_success = ? AND
		FUOU_date < $to AND FUOU_DATE > $from", 
		[$acc_id, $alternative, $type, $isSuccess])->fetchColumn();
}

function getSuccessOutcomesBetweenDates($db, $acc_id, $type, $from, $to){
	return $db->run("
	SELECT 
		COUNT(*) 
	FROM 
		function_outcomes 
	WHERE 
		FUOU_acc_id = ? AND
		FUOU_type = ? AND
		FUOU_success = 1 AND
		FUOU_date < $to AND FUOU_DATE > $from", 
		[$acc_id, $type])->fetchColumn();
}