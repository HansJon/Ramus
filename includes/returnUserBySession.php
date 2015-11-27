<?php
session_start();

$session_set = false;

if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
	include 'includes/connection.php';

	$session_set = true;

	$query = $con->prepare("SELECT * FROM user WHERE ID = :ID");
	$query->execute(array('ID' => $_SESSION['uid']));
	$row = $query->fetch(PDO::FETCH_ASSOC);

	$ID = $row['ID'];
	$Username = $row['username'];
	$Name = $row['name'];
	$Hash = $row['hash'];
	$Salt = $row['salt'];
	$Email = $row['email'];
	$Phone = $row['phone'];
	$Gender = $row['gender'];
	$CountryID = $row['country_id'];
	$RegisteredDate = $row['registeredDate'];
	$ProfileImg = $row['profileImg'];
	$CoverImg = $row['coverImg'];
} else {
	$session_set = false;
}
?>