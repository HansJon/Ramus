<?php
				include '../../../../../includes/connection.php';
				session_start();
				$uid = $_SESSION['uid'];
				$idq = $_GET['id'];
				$text = $_GET['text'];
				$query = $con->prepare("
							INSERT INTO answer (text, uploaderID, questionID) 
							VALUES (:text, :uploaderID, :questionID)
							");
	$query->execute(array('text' => $text, 'uploaderID' => $uid, 'questionID' => $idq));
	header("Location: /twigs/compsci/subsidium/hardware/questions/index.php?ID=$idq");

?>