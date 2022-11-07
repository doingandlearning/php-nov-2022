<?php

$i = 0;
$j = 2;
switch($i) {
	case 0:
		echo "i equals 0";
		break;
	case 1: 
	case 2: 
		echo "i is 1 or 2";
		break;
	case ($j * 2): 
		echo "This is 4";
		break;
	default:
		echo "Whoops!";
}

$data = [];

switch(gettype($data)) {
	case 'integer':
	case 'double':
		echo "The data type is a number";
		break;
	case 'boolean':
	  echo "the data type is boolean";
		break;
	default:
		echo "We're not handling that data type yet";

}