<?php
	$server = "tsuts.tskoli.is";
	$user = "2004972609";
	$pass = "emilmonster42";

	try {
		$con = new PDO ("mysql:host=$server;dbname=2004972609_radstefna", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$con->exec('SET NAMES "utf8"');
	} catch (PDOException $e) {
		echo "Connection failed: " . $e;
	}
?>