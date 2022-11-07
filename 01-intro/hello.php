<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		h1 {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$name = $_GET['name'];
	$language = $_GET['favouriteLanguage'];
	echo "<h1>Hello " . $name . "</h1>"; 
	
	?>
	Hello!
	<?php 
	print("<p>I hear you like " . $language ."!</p>");
	
	echo "<pre>";
	print_r($GLOBALS);
	echo "</pre>";
	?>
</body>
</html>