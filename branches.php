<html>
	<head>
		<title>Branches</title>
	 	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href="https://code.jquery.com/jquery-2.1.4.min.js">
	    <link rel="stylesheet" href="CSS/branches.css" media="screen" charset="utf-8">
	</head>
	<body>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>	
		<div class="image"></div>
		<nav>
			<div class="nav-wrapper">
				<img class="ramus" src="Media\Images\Icons\Ramus.ico">
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="branches.php">Branches</a></li>
					<?php
						session_start();

						if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
							include 'includes/connection.php';

							$query = $con->prepare("SELECT username, name FROM user WHERE ID = :ID"); // Disallow at sign for usernames
							$query->execute(array('ID' => $_SESSION['uid']));
							$row = $query->fetch(PDO::FETCH_ASSOC);

							$DB_User = $row['username'];
							$DB_Name = $row['name'];

							if ($DB_Name != null) {
								echo '<li><a href="user.php">' . $DB_Name . '</a></li>';
							} else {
								echo '<li><a href="user.php">' . $DB_User . '</a></li>';
							}
							
							echo '<li><a href="logout.php">Log out</a></li>';
						} else {
							echo '<li><a href="login.php">Login</a></li>';
						}
					?>
				</ul>
			</div>
		</nav>
		<div class="row">

			<div class="BranchWrapper col s12 m6 l3">
				<a href="computerscience.php">
					<div class="colorbranch">
						<center>
							<i class="large material-icons">code</i>
						</center>
						<h3>Computer Science</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</a>
			</div>

			<div class="BranchWrapper col s12 m6 l3">
				<a href="entertainment.php">
					<div class="colorbranch">
						<center>
							<i class="large material-icons">code</i>
						</center>
						<h3>Entertainment</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<a href="health.php">
					<div class="colorbranch">
						<center>
							<i class="large material-icons">code</i>
						</center>
						<h3>Health</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<a href="parenting.php">
					<div class="colorbranch">
						<center>
							<i class="large material-icons">code</i>
						</center>
						<h3>Parenting</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<a href="humor.php">
					<div class="colorbranch">
						<center>
							<i class="large material-icons">code</i>
						</center>
						<h3>Humor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Business</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Motivation</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Education</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Computer Science</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Entertainment</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Health</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col s12 m6 l3 BranchWrapper">
				<div class="colorbranch">
					<center>
						<i class="large material-icons">code</i>
					</center>
					<h3>Parenting</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

		</div>


		<script type="text/javascript">
			function ExpandInterest(x) {
				x.style.height = "300px";
			}
		</script>
	</body>
</html>