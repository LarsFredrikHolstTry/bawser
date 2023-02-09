<?php

$leftMenuConfig = 
[
	[
		'label' => $lang->crime,
		'ready' => isReady($db, $_SESSION['ID'], 'crime'),
		'cooldown' => getCooldown($db, $_SESSION['ID'], 'crime'),
		'link' => 'crime'
	],
	[
		'label' => $lang->blackmail,
		'ready' => isReady($db, $_SESSION['ID'], 'blackmail'),
		'cooldown' => getCooldown($db, $_SESSION['ID'], 'blackmail'),
		'link' => 'blackmail'
	],
	[
		'label' => $lang->gta,
		'ready' => isReady($db, $_SESSION['ID'], 'gta'),
		'cooldown' => getCooldown($db, $_SESSION['ID'], 'gta'),
		'link' => 'gta'
	],
	[
		'label' => $lang->mission,
		'link' => 'mission'
	],
	[
		'label' => $lang->lottery,
		'link' => 'lottery'
	],
	[
		'label' => $lang->jail,
		'link' => 'jail'
	],
	[
		'label' => $lang->attack_player,
		'link' => 'attack_player'
	],
	[
		'divider' => true,
	],
	[
		'label' => $lang->bank,
		'link' => 'bank'
	],
	[
		'label' => $lang->horseRace,
		'link' => 'horseRace'
	],
	[
		'label' => $lang->poker,
		'link' => 'poker'
	],
	[
		'label' => $lang->auctions,
		'active_auctions' => 3,
		'link' => 'auctions'
	],
	[
		'label' => $lang->city,
		'link' => 'cities'
	],
	[
		'label' => $lang->gang,
		'link' => 'gang'
	],
	[
		'label' => $lang->achievements,
		'link' => 'achievements'
	],
	[
		'label' => $lang->hitlist,
		'link' => 'kills'
	],
];
