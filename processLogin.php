<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php

	try {
		include 'includes/connection.php';

		$loginID = $_POST['loginID'];
		$password = $_POST['password'];

		$query = $con->prepare("SELECT ID, username, email, hash, salt FROM user WHERE username = :loginID OR email = :loginID"); // Disallow at sign for usernames
		$query->execute(array('loginID' => $loginID));
		$row = $query->fetch(PDO::FETCH_ASSOC);

		$DB_ID = $row['ID'];
		$DB_username = $row['loginID'];
		$DB_email = $row['email'];
		$DB_hash = $row['hash'];
		$DB_salt = $row['salt'];

		$attemptHash = hash('sha512', $password . $DB_salt);

		if ($attemptHash == $DB_hash) {
			echo 'Password correct, establishing connecton to infrastructure...';
			
			// Session starts and logs in user
			session_start();
			$_SESSION['uid'] = $DB_ID;

			header("Location: index.php");
		} else {
			echo 'Password is unfortunetely incorrect, please try again.';
		}

	} catch (PDOException $e) {
		echo '<h2 class="flow-text">Error</h2><br>';
		echo 'Cause: Connection to database failed';
	}
?>
</body>
</html>