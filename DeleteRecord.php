<?php
	session_start();

	$uid = $_SESSION['uid'];
	$rid = $_GET['rid'];

	try {
		include 'includes/connection.php';

		$query = $con->prepare("DELETE posts FROM posts JOIN user on (user.id = posts.uploaderID) WHERE user.ID = :uid AND posts.ID = :rid");
		$query->execute(array('uid' => $uid, 'rid' => $rid));

		header("Location: user.php");
	} catch (PDOException $e) {
		echo 'Deletion could not be completed, please try again in a few.';
	}
?>