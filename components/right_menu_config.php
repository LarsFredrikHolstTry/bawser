<?php

$rightMenuConfig = 
[
	[
		'tabs' => true,
	],
	[
		'divider' => true,
	],
	[
			'label' => $lang->offtopicforum,
			'amount' => 1,
			'link' => 'forum&cat=0'
	],
	[
		'label' => $lang->salesforum,
		'amount' => 5,
		'link' => 'forum&cat=1'
	],
	[
		'label' => $lang->gameforum,
		'amount' => 5,
		'link' => 'forum&cat=2'
	],
	[
		'divider' => true,
	],
	[
		'label' => 'Hjelp / Support',
		'amount' => 0,
		'link' => 'support'
	],
	[
		'label' => 'Søknader',
		'amount' => 0,
		'link' => 'applications'
	],
	[
		'label' => 'Rankliste',
		'link' => 'ranks'
	],
	[
		'label' => 'Statistikk',
		'link' => 'statistic'
	],
	[
		'label' => 'Poeng',
		'link' => 'points'
	],
];