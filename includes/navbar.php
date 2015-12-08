<?php
	echo '
	<nav>
		<div class="nav-wrapper">
			<img class="ramus" src="/Media/Images/Icons/RamusMaterial_1A.png">

			<ul id="nav-mobile" class="right hide-on-small-only">
				<li><a href="/branches.php"><i class="material-icons left">timeline</i>Branches</a></li>
				<li><a href="/settings.php"><i class="material-icons left">settings</i>Settings</a></li>';

					session_start();

					if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
						include 'connection.php';

						$query = $con->prepare("SELECT username, name FROM user WHERE ID = :ID");
						$query->execute(array('ID' => $_SESSION['uid']));
						$row = $query->fetch(PDO::FETCH_ASSOC);

						$DB_User = $row['username'];
						$DB_Name = $row['name'];

						if ($DB_Name != null) {
							echo '<li><a href="/user.php"><i class="material-icons left">account_circle</i>' . $DB_Name . '</a></li>';
						} else {
							echo '<li><a href="/user.php"><i class="material-icons left">account_circle</i>' . $DB_User . '</a></li>';
						}
						
						echo '<li><a href="/logout.php"><i class="material-icons left">power_settings_new</i>Log out</a></li>';
					} else {
						echo '<li><a href="/login.php"><i class="material-icons left">home</i>Login</a></li>';
					}
					
	echo '</ul>
		</div>
	</nav>
	<div id="navSpacing"></div>';
?>