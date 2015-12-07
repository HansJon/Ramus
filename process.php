<?php
include 'includes/connection.php';

$action = $_POST['action'];

if($action == "showroom") {
	$query = $con->prepare("SELECT username FROM user");
	$query->execute();

	$users = array();

	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		array_push($users, $row['username']);
	}

	$users = json_encode($users);
	/*
	echo $enc;
	$us = json_decode($enc);
	print_r($us);*/
	//print_r($users);
}
?>