<?php

$basket = [
	["Mango", "Apple", "banana"],
	["Burger", "Fries", "Pop"]
];

foreach($basket as $row) {
	foreach($row as $item) {
		if($item === "Apple") {
			break;
		}
		print($item);
	}
}

$i = 0;
while($i < 10) {
	$i++;
	if($i === 5) {
		continue;
	}
	print "\n$i: I love PHP";
}

// In while and do while loops
/// break will stop at a particular value
// continue will skip a particular value