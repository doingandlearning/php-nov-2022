<?php


function doSomething(int $number): int 
{
 return $number;
}

var_dump(is_callable("doSomething"));

// echo substr("Hello Glasgow", -4, 2);
echo mb_substr('ideeën', -3) . "\n";
echo mb_strtoupper('ideeën'). "\n";
echo mb_strcut('ideeën', -3). "\n";

echo preg_replace_callback('/H/i', function($match) {
	return str_repeat(strtoupper( $match[0]), 3);
}, 'hellohowareyou');

$add = function($a,$b) {
	return $a + $b;
};

var_dump(is_callable($add));

