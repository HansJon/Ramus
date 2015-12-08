<!DOCTYPE html>
<html>
<head>
	<title>Ramus - The Unification of The World</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/css.css">
	<link rel="stylesheet" href="CSS/user.css" media="screen" charset="utf-8">
</head>
<body>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>

<div class="container">
    <div class="row">
      <div id="signupForm" class="z-depth-3">
        <form action="processEdit.php" method="post">
            <h1 class="flow-text">Enter the first day of the rest of your life</h1>

			<?php
				session_start();
				$uid = $_SESSION['uid'];
				$rid = $_GET['rid'];

				include 'includes/connection.php';

				$query = $con->prepare("SELECT title, text, imgAttach FROM posts WHERE uploaderID = :uid AND id = :rid");
				$query->execute(array('uid' => $uid, 'rid' => $rid));
				//$row = $query->fetch(PDO::FETCH_ASSOC);

				while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
					$title = $row['title'];
					$text = $row['text'];
					$img = $row['imgAttach'];

					echo '
						<div class="input-field">
							<input id="title" type="text" class="validate" name="title" value="' . $title . '">
							<label for="title">Title</label>
						</div>
						<div class="input-field">
							<textarea id="msg" class="materialize-textarea validate" name="msg">' . $text . '</textarea>
							<label for="msg">Post Text</label>
						</div>
						<div class="input-field">
							<input id="image" type="text" class="validate" name="image" value="' .  $img . '">
							<label for="image">Title</label>
						</div>
					';

					$_SESSION['rid'] = $rid;
				}
			?>


            <button class="btn waves-effect waves-light" type="submit" name="x">
              Confirm edit
              <i class="material-icons right">refresh</i>
            </button>
        </form>
      </div>
 	</div>
 </div>

</body>
</html>