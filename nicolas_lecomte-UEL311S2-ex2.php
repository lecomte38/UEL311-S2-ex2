<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>UE L311 Semaine 2 - Exercice 2</title>
	</head>
	<body>
		<h1>UE L311 Semaine 2</h1>
    		<h2>Exercice 2</h2>
		<p>
			<ul>
				<li>Systeme (OS) : <?php echo php_uname(); ?></li><br>
				
				<li>Version d'Apache : <?php echo $_SERVER['SERVER_SOFTWARE'] ?></li><br>
				
				<li>Version de PHP : <?php echo phpversion(); ?></li><br>

				<li>Version du serveur (MariaDB) :
					<?php 
						/* Connexion */
						$mysqli = new mysqli("localhost", "lecomte38", "lecomte38"); 

						/* Message à afficher en cas d'échec de connexion */	
						if (mysqli_connect_errno()) {
						    die("Échec de la connexion - ".mysqli_connect_error());
						}

						/* Affichage de la version du serveur */
						echo mysqli_get_server_info($mysqli);

						/* Déconnexion */
						$mysqli->close();
					?>
				</li><br>
				
				<li>Version du client de base de données : <?php echo mysqli_get_client_info($mysqli) ?></li><br>

				<li>Hôte : <?php echo $_SERVER['HTTP_HOST'] ?></li><br>

				<li>Nom du serveur : <?php echo $_SERVER['SERVER_NAME'] ?></li><br>

				<li>Adresse IP du serveur : <?php echo $_SERVER['SERVER_ADDR'] ?></li><br>
				
				<li>Port du serveur : <?php echo $_SERVER['SERVER_PORT'] ?></li><br>
				
				<li>Protocole de communication client-serveur : <?php echo $_SERVER['SERVER_PROTOCOL'] ?></li><br>
				
				<li>Fichiers acceptés par le serveur : <?php echo $_SERVER['HTTP_ACCEPT'] ?></li><br>
				
				<li>Extensions PHP chargées : 
					<?php
						/* Liste des extensions PHP chargées */
						$tabExt = get_loaded_extensions();
						
						/* Affichage de la liste des extensions PHP chargées */
						echo "<ul>";

						for($i = 0, $nbExt = count($tabExt); $i < $nbExt; $i++) {
							$nb = $i+1;
							echo "<li> ".$nb." - ".$tabExt[$i]."</li>";
						}

						echo "</ul>";
					?>
				</li><br>
			</ul>
		</p>
  	</body>
</html>
