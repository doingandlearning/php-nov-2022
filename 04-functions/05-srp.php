<?php

// Single Responsibility Principle

function __(string $text, string $domain = "default") {
	return translate($text, $domain);
}

function multiply($name, ...$numbers) {
	if(count($numbers) === 0 ) {
		return 0;
	}
	$result = 1;
	foreach($numbers as $number) {
		$result = $result * $number;
	}
	return "$name the answer is $result";
}

echo multiply("Lukasz", 123,123,123,123,5312);