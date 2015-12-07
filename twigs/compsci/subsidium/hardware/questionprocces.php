<?php
				include '../../../../includes/connection.php';
				session_start();
				$uid = $_SESSION['uid'];
				$title	= $_GET['title'];
				$text = $_GET['text'];
				$type = 0;
				$query = $con->prepare("
							INSERT INTO questions (title, text, uploaderID, type) 
							VALUES (:title, :text, :uploaderID, :type)
							");
	$query->execute(array('title' => $title, 'text' => $text, 'uploaderID' => $uid, 'type' => $type));
	header("Location: /twigs/compsci/subsidium/hardware/questions.php");

?>