<?php

$missionConfig = 
[
	[
		'label' => 'Komme i gang',
		'in_progress' => false,
		'done' => true,
	],
	[
		'label' => 'Start opp med å tjene penger',
		'in_progress' => false,
		'done' => true,
	],
	[
		'label' => 'Oppdag byen',
		'in_progress' => true,
		'done' => true,
		'missions' => [
			[
				'label' => 'Reis til London',
				'done' => true,
				'in_progress' => false,
				'information' => 'Lorem Ipsum London'
			],
			[
				'label' => 'Reis til Stockholm',
				'done' => true,
				'in_progress' => false,
				'information' => 'Lorem Ipsum Stockholm'
			],
			[
				'label' => 'Reis til København',
				'done' => false,
				'in_progress' => true,
				'information' => 'Lorem Ipsum København'
			],
			[
				'label' => 'Reis til Paris',
				'done' => false,
				'in_progress' => false,
				'information' => 'Lorem Ipsum Paris'
			],
			[
				'label' => 'Reis til Oslo',
				'done' => false,
				'in_progress' => false,
				'information' => 'Lorem Ipsum Oslo'
			],
		],
		'payout' => [
			[
				'type' => 'money',
				'amount' => '100000'
			],
			[
				'type' => 'exp',
				'amount' => '100'
			],
			[
				'type' => 'bullet',
				'amount' => '10'
			],
			[
				'type' => 'lorem',
				'amount' => '1',
				'secret' => true,
			],
		]
	],
	[
		'label' => 'Kriminelle metoder',
		'in_progress' => false,
		'done' => false,
	],
	[
		'label' => 'Beskyttelse og våpen',
		'in_progress' => false,
		'done' => false,
	],
	[
		'label' => 'Oppdag flere byer',
		'in_progress' => false,
		'done' => false,
	],
	[
		'label' => 'Oppdag firma',
		'in_progress' => false,
		'done' => false,
	],
	[
		'label' => 'Gjeng og gjengoversikt',
		'in_progress' => false,
		'done' => false,
	],
];