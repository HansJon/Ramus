<!DOCTYPE html>
<html>
<head>
	<title>Ramus - The Unification of The World</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/css.css" media="screen" charset="utf-8">
  </head>
  <body style="color: white">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
	<?php
		session_start();

		echo $_SESSION['username'];

		$response = http_get("http://ramus.xyz/", array("timeout"=>1), $info);
		echo '<h2>' . $info['u'] . '</h2>';
	?>
</body>
</html>