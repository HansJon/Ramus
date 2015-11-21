<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php

	try {
		include 'includes/connection.php';

		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = strtolower($_POST['email']);
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$countryISO = $_POST['country']; // make sure user doesnt change select options value before submit
		//$birthday = $_POST['birthday'];
		$allowedGenders = ['male', 'female', 'other'];
		$genderValid = false;

		if ($phone == "")
			$phone = null;

		if ($name == "")
			$name = null;

		if (in_array($gender, $allowedGenders))
			$genderValid = true;


		if ($genderValid) {
			$salt = uniqid(mt_rand(), true);
			$hash = hash("sha512", $password . $salt);

			$query = $con->prepare("SELECT ID_country FROM country WHERE iso = :iso");
			$query->execute(array('iso' => $countryISO));
			$row = $query->fetch(PDO::FETCH_NUM);
			$countryID = $row[0];

			$query = $con->prepare("
									INSERT INTO User(username, name, hash, salt, email, phone, gender, country_id) 
									VALUES (:user, :name, :hash, :salt, :email, :phone, :gender, :country_id)
									");
			$query->execute(array('user' => $username, 'name' => $name, 'hash' => $hash, 'salt' => $salt, 'email' => $email, 'phone' => $phone, 'gender' => $gender, 'country_id' => $countryID));

			// Get User ID to handle session
			$query = $con->prepare("SELECT ID FROM user WHERE username = :username");
			$query->execute(array('username' => $username));
			$row = $query->fetch(PDO::FETCH_ASSOC);

			$uid = $row['ID'];

			// Session starts and logs in user
			session_start();
			$_SESSION['uid'] = $uid;
			
			header("Location: index.php");
		} else {
			echo 'YOU HAVE FAILED THE WORLD';
		}
	} catch (PDOException $e) {
		echo '<h2 class="flow-text">Error</h2><br>';
		echo 'Cause: This username, email address or phone number is already registered';
	}
?>
</body>
</html>