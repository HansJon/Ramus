<!DOCTYPE html>
<html>
<head>
	<title>Ramus - The Unification of The World</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="CSS/branches.css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="CSS/user.css" media="screen" charset="utf-8">
</head>
<body>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>

	<?php
		include 'includes/navbar.php';
		include 'includes/returnUserBySession.php';
		if ($session_set) {
			echo '
			<div class="container">
				<div id="wrapper">
					<div id="cover">
						<img id="coverImg" src="' . $CoverImg . '"></img>
						<img id="profileImg" src="' . $ProfileImg . '"></img>
					</div>
					<div id="profile">';

					if ($Name != NULL) {
						echo '<h1>' . $Name . '</h1>';
					} else {
						echo '<h1>' . $Username . '</h1>';
					}

					echo '
					</div>
				</div>';
		} else {
			header("Location: /branches.php");
		}
	?>

		<div id="Leaf">
			<form action="/processLeaves.php">
				
				<div id="LeafTextArea" class="col s12 m9" style="border: 1px solid black; padding: 0; margin: 0;">
						<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
							<label for="icon_prefix2">First Name</label>
						</div>
					<button class="btn waves-effect waves-light" style="margin-left: 43px" type="submit" name="x">
						Leave
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>