<?php

/**
 * Display alert on the front end
 * 
 * Allowed types:
 * success, error, default, warning
 */
function alert(string $type, string $text){

	switch ($type) {
    case 'success':
			$icon = 'eva:checkmark-circle-outline';
      break;
		case 'error':
			$icon = 'material-symbols:error-circle-rounded-outline';
			break;
		case 'default':
			$icon = 'mi:circle-information';
			break;
		case 'warning':
			$icon = 'material-symbols:warning-outline-rounded';
			break;
		case 'cooldown':
			$icon = 'mdi:alarm-clock';
			break;
	}

	$alert = '
		<div class="feedback feedback-'.$type.'">
			<iconify-icon 
			class="medium_icon feedback-'.$type.'-icon" 
			icon="'.$icon.'">
			</iconify-icon>
			<span>'.$text.'</span>
		</div>
		';

		return $alert;
}

