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
			'link' => '?page=forum&cat=0'
	],
	[
		'label' => $lang->salesforum,
		'amount' => 5,
		'link' => '?page=forum&cat=1'
	],
	[
		'label' => $lang->gameforum,
		'amount' => 5,
		'link' => '?page=forum&cat=2'
	],
	[
		'divider' => true,
	],
	[
		'label' => 'Hjelp / Support',
		'amount' => 0,
		'link' => '?page=support'
	],
	[
		'label' => 'Søknader',
		'amount' => 0,
		'link' => '?page=applications'
	],
	[
		'label' => 'Rankliste',
		'link' => '?page=ranks'
	],
	[
		'label' => 'Statistikk',
		'link' => '?page=statistic'
	],
	[
		'label' => 'Poeng',
		'link' => '?page=points'
	],
];