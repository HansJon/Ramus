<?php
	$isLoggedIn = false;
	session_start();

	if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
		$isLoggedIn = true;
	}
?>