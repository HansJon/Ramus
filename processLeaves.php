<?php
	include 'includes/connection.php';

	$title = $_POST['title'];
	$text = $_POST['msg'];
	session_start();
	$uploaderID = $_SESSION['uid'];
	$img = $_POST['ImgURL'];

	try {
		if ($img != null) {
		$query = $con->prepare("
								INSERT INTO posts(title, text, imgAttach, uploaderID) 
								VALUES (:title, :text, :img, :uploaderID)
								");
		$query->execute(array('title' => $title, 'text' => $text, ':img' => $img, 'uploaderID' => $uploaderID));
		} else {
			$query = $con->prepare("
									INSERT INTO posts(title, text, uploaderID) 
									VALUES (:title, :text, :uploaderID)
									");
			$query->execute(array('title' => $title, 'text' => $text, 'uploaderID' => $uploaderID));
		}

		header("Location: user.php");
	} catch (PDOException $e) {
		echo 'An error came up while processing your leaf, please try again soon.';
	}

	
?>