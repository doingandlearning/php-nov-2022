<?php
// namespace Aurora;
/**
 * Determines the output directory where your files will
 * go, based on where the system temp directory is.
 * 
 * @param string $systemTempDirectory
 * @return string
 */
// function determineOutputDirectory(string $systemTempDirectory = "/tmp"): string
// {
// 	// 
// 	return "/tmp";
// }

// Aurora\determineOutputDirectory();

$count = 0;

function countMe() {
	global $count;
	$count++;
}

countMe();
countMe();
echo $count;