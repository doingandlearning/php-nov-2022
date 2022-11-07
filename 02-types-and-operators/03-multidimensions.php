<?php

$heroInfo = [
	[
		'heroName' => 'Superman',
		'weapon' => ['Laser eye', 'Ice breath', 'Super strength']
	],
	[
		'heroName' => 'Ironman',
		'weapon' => 'Money'
	],
	[
		'heroName' => 'Thor',
		'weapon' => 'Mjolnir'		
	]
	];

	print_r($heroInfo[1]["weapon"]);

	echo $heroInfo[2]["heroName"] . " weilds " . $heroInfo[2]["weapon"];