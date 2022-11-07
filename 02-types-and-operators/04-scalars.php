<?php
// Coercive or Strict

# By default we are coercive

function number(int $int) {
	var_dump(is_int($int));
}

number(true);
echo "\n";
number(false);

// (float)
// (bool)
// (string)
// (array)
// (object)
// (unset) -> casts as null
 
// var_dump((string) 1234);