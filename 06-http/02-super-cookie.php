<?php

if(array_key_exists('refcode', $_GET)) {
	setcookie('super-ref', $_GET['refcode'], time() + 60 * 60 * 24 * 30);
}

?>

<pre>

<?php

$refcode = array_key_exists('super-ref', $_COOKIE) ? $_COOKIE['super-ref'] : "";

?>

</pre>

<form action="super-cookie.php" method="get">
	<input type="text" name="refcode" placeholder="Reference code" value="<?php echo $refcode; ?>">
	<input type="submit" value="Apply referral code" >
</form>

<?php

if(!session_start()) {
	echo 'Cannot start the session.';
	return;
}

print_r($_SESSION);