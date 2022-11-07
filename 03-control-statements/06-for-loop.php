<?php

for($index = 1; $index <= 10; $index++) {
	print($index . "\n");
}

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];


for($index = 0; $index < count($days); $index++ ) {
	echo $days[$index];
}
unset($days[2]);

foreach($days as $day) {
	echo $day;
}