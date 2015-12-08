<!DOCTYPE html>
<html>
<head>
	<title>Ramus - The Unification of The World</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="CSS/css.css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="CSS/user.css" media="screen" charset="utf-8">
</head>
<body>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>

	<?php
		include 'includes/navbar.php';
		include 'includes/returnUserBySession.php';

		echo '<div style="background-color: #3A89BD">';

		if ($session_set) {
			echo '
			<div class="container">
				<div id="wrapper">
					<div id="cover">
						<img id="coverImg" src="' . $CoverImg . '"></img>
						<a href="profileimg.php"><img id="profileImg" src="' . $ProfileImg . '"></img></a>
					</div>
					<div id="profile">';

					if ($Name != NULL) {
						echo '<h1 class="flow-text" style="font-size: 3em; margin-top: 15px">' . $Name . '</h1>';
					} else {
						echo '<h1 class="flow-text" style="font-size: 3em; margin-top: 15px">' . $Username . '</h1>';
					}

					echo '
					</div>
				</div>';
		} else {
			header("Location: /branches.php");
		}
	?>

	<div id="Leaf">
		<form action="/processLeaves.php" method="POST" enctype="multipart/form-data">
			<div id="LeafTextArea" class="col s12 m9">
				<i class="material-icons prefix">mode_edit</i>
				<div class="input-field">
					<input id="title" type="text" class="validate" name="title" required>
					<label for="title">Title</label>
				</div>
				<div class="input-field">
					<textarea name="msg" id="icon_prefix2" class="materialize-textarea validate"></textarea>
					<label for="icon_prefix2">Share your leaf of life</label>
				</div>
				<div class="input-field">
					<input id="imgurl" type="text" class="validate" name="ImgURL">
					<label for="imgurl">Image URL</label>
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-light" type="submit" name="x">
						Send
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</form>
	</div>
	</div> <!-- Container ends -->
</div>

	<div style="width: 100%; background-color: #3A89BD">
	<div class="row">
		
	<div id="PostSpectrum">
		<?php
			include 'includes/connection.php';

			session_start();
			$uid = $_SESSION['uid'];

			$query = $con->prepare("SELECT posts.id AS 'postID', title, text, imgAttach, uploadTimestamp, user.username AS 'username', user.name AS 'name' FROM posts JOIN user on (user.ID = posts.uploaderID) WHERE uploaderID = :uid ORDER BY uploadTimestamp DESC");
			$query->execute(array('uid' => $uid));
			//$row = $query->fetch(PDO::FETCH_ASSOC);

			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$ID = $row['postID'];
				$title = $row['title'];
				$text = $row['text'];
				$img = $row['imgAttach'];
				$uploadTimestamp = $row['uploadTimestamp'];
				$uploaderName = $row['name'];
				//echo "<script>alert('pre-user: $uploaderName')</script>";

				if ($uploaderName != null) {
					$uploader = $uploaderName;
				} else {
					$uploader = $row['username'];
				}

				if ($img != null) {
					echo '
					<div class="col s12 m6">
						<div class="card hoverable teal white-text">
							<div class="card-image">
								<img src="' . $img . '">
								<span class="card-title PostTitle flow-text">' . $title . '</span>
							</div>
							<div class="card-content">
								<p class="PostContent flow-text">' . $text . '</p>
								<p class="PostTime flow-text">' . $uploadTimestamp . '</p><br>
								<p class="PostUser flow-text">' . $uploader . '</p>
							</div>
							<div class="card-action" style="border-top: 1px solid white;">
								<a class="waves-effect waves-light btn white-text blue" href="edit.php?rid=' . $ID . '"><i class="material-icons left">edit</i>Edit</a>
								<a class="waves-effect waves-light btn white-text right red" href="DeleteRecord.php?rid=' . $ID . '"><i class="material-icons left">delete</i>Delete</a>
							</div>
						</div>
					</div>
					';
				} else {
					echo '
					<div class="col s12 m6">
						<div class="card-panel hoverable teal">
							<span class="white-text">
							<div class="Post">
								<h3 class="PostTitle flow-text" style="font-size: 2.5em">' . $title . '</h2><br>
								<p class="PostContent flow-text">' . $text . '</p><br>
								<p class="PostTime flow-text">' . $uploadTimestamp . '</p><br>
								<p class="PostUser flow-text">' . $uploader . '</p>
							</div>
							<hr>
							<div class="card-action">
								<a class="waves-effect waves-light btn white-text blue" href="edit.php?rid=' . $ID . '"><i class="material-icons left">edit</i>Edit</a>
								<a class="waves-effect waves-light btn white-text right red" href="DeleteRecord.php?rid=' . $ID . '"><i class="material-icons left">delete</i>Delete</a>
							</div>
							</span>
						</div>
					</div>';
				}

			}
		?>
	</div>
	</div>
</body>
</html>