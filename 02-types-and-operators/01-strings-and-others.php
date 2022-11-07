<?php

# A single lined cmoment

$name = "Kevin"; #asdasd

/*

A multi-line comment in here!
- strings
- integers
- floats
- booleans
- arrays (indexed/associative)
- objects
- resource
- null

*/
$name = "Kevin";

echo "Goodbye $name!\n";
echo 'Hello!\n';

$longString = <<<EOT
This is a long string
it goes and on
and on 
and on
and on.
Oh hi $name!
EOT;

echo $longString;
echo "\n";

$w = 13.333;
$x = -0.888;
$y = 17e+2;
$z = 8e-2;

$isAdmin = true;
$isAdmin = false;

echo $w * $x;
echo "Hello $w";