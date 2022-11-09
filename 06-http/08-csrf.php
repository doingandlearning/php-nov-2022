<?php

session_start();
if (!array_key_exists("csrf-token", $_SESSION)) {
	$_SESSION["csrf-token"] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	if (!array_key_exists('csrf-token', $_POST) ) {
		echo '<p>Error: This is an unauthenticated request.</p>';
	} else if ($_POST['csrf-token'] !== $_SESSION['csrf-token']) {
		echo '<p>Error: This is an unauthenticated request.</p>';
	}
	else {
		echo '<p>The request is authenticated.</p>';
	}
}

?>

<form method="post">
	<label for="email">Email: </label><br>
	<input type="hidden" name="csrf-token" value="<?php echo $_SESSION['csrf-token']; ?>" >
	<input id="email" name="email">
	<button type="submit">Submit with empty/invalid CSRF token</button>
	<button type="submit" >Submit with CSRF token</button>
</form>