<?php
session_start();
require_once('edit.php');

if (!empty($_POST['email']) || !empty($_POST['mdp']) || !empty($_POST['cp']) || !empty($_POST['ville'])) {
	$modif = new Edit($_SESSION['id_membre']);
	$modif->edit_profil();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Modifier mon profil</title>
	<meta name="description" content="modifier le profil d'un membre du site">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<div id="modifier">
				<form method="post" name="modifier">
					<input type="text" name="ville" placeholder="Nouvelle ville">
					<input type="text" name="cp" placeholder="Nouveau code postal">
					<input type="text" name="email" placeholder="Nouvelle adresse mail">
					<input type="text" name="mdp" placeholder="Nouveau mot de passe">
					<input type="submit" value="Editer">
				</form>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>