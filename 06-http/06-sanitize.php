
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	.error {
		color: red;
		font-weight: 800;
	}
	</style>
</head>
<body>
<?php

$stars = filter_input(INPUT_POST, 'stars', FILTER_SANITIZE_NUMBER_INT);
$message = array_key_exists('message', $_POST) ? trim(strip_tags($_POST['message'])) : false;

if($stars === null) {
	echo '<p class="error">Stars input is not set.</p>';
} else if ($stars === false) {
	echo '<p class="error">Stars is not an integer.</p>';
} else {
	// First approach
	$stars = (int) $stars;
	if($stars < 1 || $stars > 5) {
		echo '<p class="error">Stars can have values between 1 and 5.</p>';
	}

	// Second approach
	// $stars = filter_var($stars, FILTER_VALIDATE_INT, [
	// 	'options' => [
	// 		'default' => 0,
	// 		'min_range' => 1,
	// 		'max_range' => 5
	// 	]
	// 	]);
	// if($stars === 0 ) {
	// 	echo '<p>Stars can have values between 1 and 5.</p>';
	// }

	// Some logic to persist the database ... 
}

if($message === "") {
	echo '<p class="error">Message input is not set.</p>';
} else if ($message === false) {
	echo '<p class="error">Message failed the sanitization filter.</p>';
}

printf("<p>Stars: %s</p><p>Message: %s</p>", var_export($stars, true), var_export($message, true));

?>

<form method="post">
	<label for="stars">Stars: </label><br>
	<input type="number" id="stars" name="stars" max="5" min="1" required><br>
	<label for="message">Message: </label><br>
	<textarea
		id="message"
		name="message"
		rows="10"
		cols="40"
		required
	></textarea>
	<input type="submit" value="Submit">
</form>
</body>
</html>