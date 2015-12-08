<html>
	<head>
		<title>Branches</title>
	 	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <link rel="icon" type="image/png" href="/Media/Images/Icons/RamusMaterial_1A.png"/>
	    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href="https://code.jquery.com/jquery-2.1.4.min.js">
		<link rel="stylesheet" type="text/css" href="/CSS/user.css">
		<link rel="stylesheet" type="text/css" href="/CSS/questions.css">
	</head>
	<body>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>	
				<?php
					include '../../../../../includes/navbar.php';

					$idq = $_GET['ID'];
					
				?>
					<div class="row">
			<?php
				include '../../../../../includes/connection.php';
				session_start();
				$uid = $_SESSION['uid'];
				$query = $con->prepare("SELECT questions.ID, title, text, uploadTimestamp, user.username AS 'username', user.name AS 'name' FROM questions JOIN user on (user.ID = questions.uploaderID)where questions.ID = '$id' ORDER BY uploadTimestamp DESC");
				$query->execute();
				//$row = $query->fetch(PDO::FETCH_ASSOC);

				while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
					$ID = $row['ID'];
					$title = $row['title'];
					$text = $row['text'];
					$uploadTimestamp = $row['uploadTimestamp'];
					$uploaderName = $row['name'];			
					if ($uploaderName != null) {
						$uploader = $uploaderName;
					} else {
						$uploader = $row['username'];
					}

					echo '
						<div class="col s12">
							<div class="Branchquestionan">
									<h2 class="postTitle">' . $title . '</h2>
									<p class="postContent flow-text">' . $text . '</p>
									<p class="time right">' . $uploadTimestamp . '</p>
									<p class="uploader">' . $uploader . '</p> 
							</div>
						</div>';	
				}
					
					$query = $con->prepare("SELECT answer.ID, text, uploadTimestamp, user.username AS 'username', user.name AS 'name' FROM answer JOIN user on (user.ID = answer.uploaderID)where answer.questionID = '$idq' ORDER BY uploadTimestamp DESC");
					$query->execute();
					while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
						$ID = $row['ID'];
						$text = $row['text'];
						$uploadTimestamp = $row['uploadTimestamp'];
						$uploaderName = $row['name'];			
						
						if ($uploaderName != null) {
							$uploader = $uploaderName;
						} else {
							$uploader = $row['username'];
						}

					echo '
						<div class="col s12">
							<div class="Branchquestionan">
									<p class="postContent flow-text">' . $text . '</p>
									<p class="time right">' . $uploadTimestamp . '</p>
									<p class="uploader">' . $uploader . '</p> 
							</div>
						</div>';	
				}
			
			echo' 
				<div class="col s12" >
					<div class="Branchquestionan">
						<form action="answerprocces.php" method="GET">
							<label for="text">Text</label>
							<input type="text" name="text" id="text">
							<input type="text" name="id" value="'. $idq .'" class="hidden"> 
							<input type="submit" value="submit"> 
						</form>		
					</div>
				</div>';	
			?>
			
		</div>	
	</body>
</html>
