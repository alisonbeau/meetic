<?php

require_once('class_connexion.php');
require_once('profil.php');
require_once('formulaire.php');

$membre = new Profil();
$membre->profil();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Espace membre</title>
	<meta name="description" content="espace des membres du site Terencontrer.com">
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
					<li><a href="" title="page des membres du site de rencontre"><strong>Membres</strong></a>
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
			<div id="fiche">
				<?php session_start(); ?>
				<table>
					<tr>
						<td>
							<?php echo "NOM : " . $_SESSION['nom']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo "PRENOM : " . $_SESSION['prenom']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo "SEXE : " . $_SESSION['sexe']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo "DATE DE NAISSANCE : " . $_SESSION['date_de_naissance']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo "VILLE : " . $_SESSION['ville']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo "CODE POSTAL : " . $_SESSION['cp']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo "EMAIL : " . $_SESSION['email']; ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<footer>
		<!-- <div id="footer">
			<div id="prefere">
			</div> 
		</div> -->
	</footer>
	</body>
</html>