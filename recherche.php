<?php

session_start();
require_once('rechercher.php');

$reche = new Rechercher();
$reche->recherche();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="rechercher un membre du site de rencontre">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rechercher un membre</title>
	<link href="style/style_profil.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="menu.js">
	</script>
	</head>
	<body>
		<header>
			<div id="logo">
				<img src="img/logo.png" alt="logo"> 
			</div>
			<nav>	 
				<ul id="MenuDeroulant">
					<li><a href="index.php" title="revenir à la page d'accueil et d'inscription"><strong>Accueil</strong></a></li>
					<li><a href="#" title="page des membres du site de rencontre"><strong>Membres</strong></a>
						<ul>
							<li><a href="membres.php" title="Voir votre profil">Voir mon profil</a></li>
							<li><a href="modifier.php" title="Modifier votre profil">Modifier mon profil</a></li>
							<li><a href="deconnexion.php" title="Vous deconnectez">Deconnexion</a></li>       
						</ul>
					</li>
					<li><a href="recherche.php" title="Faire une recherche"><strong>Recherche</strong></a>
					</li>
					<li><a href="contact.php" title="Contactez-nous"><strong>Contact</strong></a></li>
				</ul>
			</nav>
		</header>
		<div id="container">
			<div id="toolbar">
				<form class="form" name="form" method="post" action="recherche.php">
					<p><label for="sexe">Sexe :</label> <input type="radio" id="sexe" name="sexe" value="femme">Une femme <input type="radio" name="sexe" value="homme">Un homme </p>
					<p><label for="sexe">Age :</label> <input type="radio" name="sexe" value="sexe">18-25ans <input type="radio" name="sexe" value="sexe">25-35ans <input type="radio" name="sexe" value="sexe">35-45ans <input type="radio" name="sexe" value="sexe">45ans et plus</p> 
					<p> <label for="ville">Ville : </label> <input type="text" id="ville" name="ville"> </p>
					<input type="submit" value="Rechercher">
				</form>
			</div>
		</div>
	<footer>
	</footer>
</body>
</html>