<html>
	<head>
		<title>Branches</title>
	 	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <link rel="icon" type="image/png" href="/Media/Images/Icons/RamusMaterial_1A.png"/>
	    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href="https://code.jquery.com/jquery-2.1.4.min.js">
	    <link rel="stylesheet" href="/CSS/branches.css" media="screen" charset="utf-8">
	</head>
	<body>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>	
		<!--<div class="image"></div>-->
		
		<?php
			include 'includes/navbar.php';
			include 'includes/connection.php';

			echo '<div class="row">';

			$query = $con->prepare("SELECT title, description, icon, destinationURL FROM branch");
			$query->execute();
			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$title = $row['title'];
				$des = $row['description'];
				$icon = $row['icon'];
				$URL = $row['destinationURL'];

				echo '
					<div class="BranchWrapper col s12 m6 l3">
						<a href="' . $URL . '">
							<div class="branch">
								<center>
									<i class="large material-icons">' . $icon . '</i>
								</center>
								<h3>' . $title . '</h3>
								<p class="flow-text">' . $des . '</p>
							</div>
						</a>
					</div>
				';
			}
		?>

		</div>


		<script type="text/javascript">
			function ExpandInterest(x) {
				x.style.height = "300px";
			}
		</script>
	</body>
</html>