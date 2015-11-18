<?php
	$server = "tsuts.tskoli.is";
	$user = "2808982529";
	$pass = "mypassword";

	try {
		$con = new PDO ("mysql:host=$server;dbname=2808982529_Ramus", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$con->exec('SET NAMES "utf8"');
	} catch (PDOException $e) {
		echo "Connection failed: " . $e;
	}
?>