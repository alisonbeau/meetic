<?php 

require_once('formulaire.php');

if (count($_POST)){
	if (!empty($_POST['sexe']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['dates']) && !empty($_POST['ville']) && !empty($_POST['cp']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
		$formulaire = new Form();
		$formulaire->check($_POST['email']);
	} else {
		echo "veuillez remplir tout les champs";
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Accueil du site terencontrer.com</title>
	<meta name="description" content="terencontrer.com, un site de rencontre pour les hommes et les femmes vivant en France">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style/styles.css" rel="stylesheet">
</head>
<body>
	<header>
		<div id="logo">
			<img src="img/logo.png" alt="logo"> 
		</div>
		<div id="insciption">
			<p> <a href="index.php" title="revenir à la page d'accueil et d'inscription">S'inscrire</a> | <a href="connexion.php" title="Se connecter au site">Déja membre ?</a> </p>
		</div>
	</header>
	<div id="container">
		<form name="inscription" action="index.php" method="post">
			<?php
			if (isset($formulaire)) {
				foreach ($formulaire->errors as $value) {
					echo "<p class=\"error\">$value</p>";
				}
			}
			?>
			<p><label for="sexe"> Je suis </label> <input type="radio" id="sexe" name="sexe" value="femme">Une femme <input type="radio" name="sexe" value="homme">Un homme</p>
			<p> <label for="nom"> Nom </label> <input type="text" name="nom" id="nom" placeholder="Votre nom"></p>
			<p> <label for="prenom"> Prénom </label> <input type="text" name="prenom" id="prenom" placeholder="Votre prénom"></p>
			<p> <label for="dates"> Date de naissance </label> <input type="text" name="dates" id="dates" placeholder="JJ-MM-AAAA">
			<p> <label for="ville"> Ville </label> <input type="text" name="ville" id="ville" placeholder="Votre ville"></p>
			<p> <label for="cp"> Code postal </label> <input type="text" name="cp" id="cp" placeholder="ex: 92230"></p>
			<p> <label for="email"> Adresse email </label> <input type="email" name="email" id="email" placeholder="xxxxx@xxxxx.xxx"></p>
			<p> <label for="mdp"> Mot de passe </label> <input type="password" id="mdp" name="mdp"></p>
			<button type="submit" name="valider">Envoyer</button>
		</form>
	</div>
	<footer>
	</footer>
</body>
</html>
