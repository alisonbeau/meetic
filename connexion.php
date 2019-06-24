<?php

require_once('class_connexion.php');

if(count($_POST)){

	if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
		$connexion = new Connexion();
		$connexion->connexion();
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="connexion au site de rencontre terencontrer.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page de connexion</title>
	<link href="style/styles.css" rel="stylesheet">
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
					<li><a href="index.php" title="revenir à la page d'accueil"><strong>Accueil</strong></a></li>
					<li><a href="index.php" title="revenir à la page d'inscription"><strong>Inscription</strong></a></li>
					<li><a href="contact.php" title="Contactez-nous"><strong>Contact</strong></a></li>
				</ul>
			</nav>
		</header>
		<div id="container">
			<form name="connexion" action="connexion.php" method="post">
				<p> <label for="email"> Adresse email </label> <input type="email" name="email" id="email" placeholder="xxxxx@xxxxx.xxx"></p>
				<p> <label for="mdp"> Mot de passe </label> <input type="password" id="mdp" name="mdp"></p>
				<button type="submit" name="valider">Se connecter</button>
			</form>
		</div>
		<footer>
		<!-- <div id="footer">
			<div id="prefere">
			</div> 
		</div> -->
	</footer>
</body>
</html>