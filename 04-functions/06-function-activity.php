<?php

$directors = [
	'steven-spielberg' => [
		'ET',
		'Raiders of the lost ark',
		'Saving Private Ryan'
	],
	'martin-scorsese' => [
		'Ashes and Diamonds',
		'The Leopard',
		'The River'
	],
	'kathryn-bigelow' => [
		'Detroit',
		'Last Days',
		'The Hurt Locker'
	],
	'felix-gary-gray' => [
		'Men in Black: International',
		'The Fate of the Furious',
		'Law Abiding Citizen'
	]
];

function processDirectorName(string $name): string {
	$nameParts = explode("-", $name);
	$lastName = strtoupper(array_pop($nameParts));
	$firstName = ucfirst(array_shift($nameParts));

	if($nameParts) {
		foreach($nameParts as $part) {
			$formattedPart = ucfirst($part);
			$firstName .= " $formattedPart";
		}
	}
	return "$firstName $lastName";
}

function processMovies(array $movies): string {
	$formattedStrings = [];
	foreach($movies as $movie) {
		$formattedStrings[] = "\"$movie\"";
	}
	return implode(", ", $formattedStrings);
}

ksort($directors);

foreach($directors as $director => $movies) {
	echo processDirectorName($director) . ": ";
	echo processMovies($movies) . ".";
	echo PHP_EOL;
}