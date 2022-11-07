<?php

$names = ["Stuart", "Lukasz", "Kevin"];

print_r(count($names));

array_push($names, "Cat1");
print_r($names);
array_pop($names);
print_r($names);

unset($names[1]);
print_r($names);
$names[1] = "Chris";
print_r($names);

array_shift($names);
print_r($names);

array_unshift($names, "Clark");

print_r($names);
echo $names[count($names)-1];

$heroInfo = [
	'name' => 'Peter Parker',
	'superHeroName' => 'Spiderman',
	'city' => 'New York',
	'creator' => 'Stan Lee'
];

$heroInfo1 = array(
	'name' => 'Peter Parker',
	'superHeroName' => 'Spiderman',
	'city' => 'New York',
	'creator' => 'Stan Lee'
);


print_r($heroInfo);

echo $heroInfo['name'];