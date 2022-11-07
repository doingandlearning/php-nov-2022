<?php

$a = 5;
$b = 3;
if($a - $b) {
	
	if($a>$b) {
		$difference = $a - $b;
	} else {
		$difference = $b - $a;
	}
	echo "The difference is $difference";
} else {
	echo "The numbers are equal.";
}
var_dump(isset($difference));

$age = 12;

if($age > 35) {
	echo "You can stand for election for US or Irish president";
} else if ($age > 21) {
	echo "You can drink in America";
} else if ($age > 18) {
	echo "You can drink in the UK";
} else {
	echo "No drinking for you (legally)";
}

function todayIsSunday() {
	echo "Checking day";
	return true;
}

function isNotRaining() {
	echo "Checking weather";
	return true;
}

if(todayIsSunday() && isNotRaining()) {
	echo "Let's go for a hike!";
}

