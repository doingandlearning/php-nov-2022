<?php

$isRaining = true;

if($isRaining) {
	print "Get an umbrella";
} else {
	print "Leave your coat at home.";
}

$action = $isRaining ? 	
   "Get an umbrella" : 	
	 "Leave your coat at home.";

print $action;