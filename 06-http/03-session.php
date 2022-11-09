<?php

if(!session_start()) {
	echo 'Cannot start the session.';
	return;
}

$sessionName = session_name();
$sessionId = session_id();



echo $sessionName . "-" . $sessionId;

$_SESSION["favColor"] = "red";