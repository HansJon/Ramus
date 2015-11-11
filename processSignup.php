<?php
	include '../includes/connection.php';

	$salt = uniqid(mt_rand(), true);
	$hash = hash("sha256", $password . $salt);

	$query = $con->prepare("INSERT INTO User(username, name, hash, salt, email, country, phone, gender )");
?>