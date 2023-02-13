<?php

$missionConfig = 
[
	[
		'label' => 'Komme i gang',
		'in_progress' => $active_main_mission == 0,
		'done' => false,
		'missions' => [
			[
				'label' => 'Kjøp ransbeskyttelse',
				'done' => $active_sub_mission > 0,
				'in_progress' => $active_sub_mission == 0,
				'information' => 'Lorem Ipsum London'
			],
			[
				'label' => 'Putt alle pengene i banken',
				'done' => $active_sub_mission > 1,
				'in_progress' => $active_sub_mission == 1,
				'information' => 'Lorem Ipsum Stockholm'
			],
		],
		'payout' => [
			[
				'type' => 'money',
				'amount' => '100000'
			],
			[
				'type' => 'lorem',
				'amount' => '1',
				'secret' => true,
			],
		]
	],
	[
		'label' => 'Start opp med å tjene penger',
		'in_progress' => $active_main_mission == 1,
		'done' => false,
	],
	[
		'label' => 'Oppdag byen',
		'in_progress' => $active_main_mission == 2,
		'done' => false,
		'missions' => [
			[
				'label' => 'Reis til London',
				'done' => $active_sub_mission > 0,
				'in_progress' => $active_sub_mission == 0,
				'information' => 'Lorem Ipsum London'
			],
			[
				'label' => 'Reis til Stockholm',
				'done' => $active_sub_mission > 1,
				'in_progress' => $active_sub_mission == 1,
				'information' => 'Lorem Ipsum Stockholm'
			],
			[
				'label' => 'Reis til København',
				'done' => $active_sub_mission > 2,
				'in_progress' => $active_sub_mission == 2,
				'information' => 'Lorem Ipsum København'
			],
			[
				'label' => 'Reis til Paris',
				'done' => $active_sub_mission > 3,
				'in_progress' => $active_sub_mission == 3,
				'information' => 'Lorem Ipsum Paris'
			],
			[
				'label' => 'Reis til Oslo',
				'done' => $active_sub_mission > 4,
				'in_progress' => $active_sub_mission == 4,
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
		'in_progress' => $active_main_mission == 3,
		'done' => false,
	],
	[
		'label' => 'Beskyttelse og våpen',
		'in_progress' => $active_main_mission == 4,
		'done' => false,
	],
	[
		'label' => 'Oppdag flere byer',
		'in_progress' => $active_main_mission == 5,
		'done' => false,
	],
	[
		'label' => 'Oppdag firma',
		'in_progress' => $active_main_mission == 6,
		'done' => false,
	],
	[
		'label' => 'Gjeng og gjengoversikt',
		'in_progress' => $active_main_mission == 7,
		'done' => false,
	],
];