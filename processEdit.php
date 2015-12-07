<?php
	session_start();

	$uid = $_SESSION['uid'];
	$rid = $_SESSION['rid'];

	$title = $_POST['title'];
	$text = $_POST['msg'];
	$image = $_POST['image'];

	try {
		include 'includes/connection.php';

		$query = $con->prepare("UPDATE posts JOIN user on (user.id = posts.uploaderID) SET title = :title, text = :text, imgAttach = :img WHERE user.ID = :uid AND posts.ID = :rid");
		$query->execute(array('title' => $title, 'text' => $text, 'img' => $image, 'uid' => $uid, 'rid' => $rid));

		session_destroy($_SESSION['rid']);
		header("Location: user.php");
	} catch (PDOException $e) {
		echo 'Edit could not be completed, please try again in a few.';
	}
?>