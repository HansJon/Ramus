<?php
	echo '
	<nav>
		<div class="nav-wrapper">
			<img class="ramus" src="http://www.ramus.xyz/Media/Images/Icons/Ramus.ico">
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="branches.php">Branches</a></li>';

					session_start();

					if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
						include 'includes/connection.php';

						$query = $con->prepare("SELECT username, name FROM user WHERE ID = :ID");
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
					
	echo '</ul>
		</div>
	</nav>';
?>