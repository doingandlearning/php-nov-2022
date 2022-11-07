<?php

$fruits = [
	'pear',
	'apple',
	'Orange'
];

function upperCaseArray(array $items = [1,2,3]) {
	$result = [];
	foreach($items as $item) {
		array_push($result,strtoupper($item));
		
	}
	return $result;
}

$uppered = upperCaseArray($fruits);

print_r($fruits);
print_r($uppered);

// $reversed_fruits = sort($fruits);
print_r($fruits);
print_r($reversed_fruits);

$text = "We would like to see if any spaces followed by three word characters are in this text.";

$pattern = "/\s\w{3}/i";

$matches = [];

preg_match_all($pattern, $text, $matches);

print_r($matches);
print_r($text);

printf("I can pass strings like this %s and numbers like this %d.", 
       "I am a string", 
			 1234);

print_r($fruits);
sort($fruits, SORT_FLAG_CASE | SORT_NATURAL);
print_r($fruits);