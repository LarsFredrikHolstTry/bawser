<?php

function validate_number(string $amount, ?bool $allowMinus = false) {
	// Remove spacing from a number
	// 1 000 will be formatted to 1000
	$amount = number_format($amount, 0, '.', ' ');

	// If number is null or not a number
	if($amount === null || !is_numeric($amount)){
		return false;
	}

	// Don't allow negative numbers
	if(!$allowMinus && $amount < 0){
		return false;
	}

	return true;
}

echo validate_number(100);