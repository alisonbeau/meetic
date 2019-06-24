<?php

require_once('Bdd.php');
require_once('formulaire.php');

class Connexion extends Database {

	function __construct() {
		parent::__construct();
	}

	public function connexion() {
		if(empty($_POST['email']) || empty($_POST['mdp'])) {
			echo "Un champs n'est pas rempli, merci de remplir tous les champs";
		} else {
			$req = $this->bdd->prepare("SELECT * 
										FROM membres 
										WHERE email = :email 
										AND mdp = :mdp");
			$req->execute(array(
				':email' => $_POST['email'],
				':mdp' => sha1($_POST['mdp'])
			));
			$connexion = $req->fetch();
		}

		if (count($_POST)) {
			if (!$connexion) {
				echo "mauvais identifiant ou mot de passe";
			} else {
				session_start();
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['mdp'] = $_POST['mdp'];
				$_SESSION['sexe'] = $connexion['sexe'];
				$_SESSION['nom'] = $connexion['nom'];
				$_SESSION['prenom'] = $connexion['prenom'];
				$_SESSION['date_de_naissance'] = $connexion['date_de_naissance'];
				$_SESSION['cp'] = $connexion['cp'];
				$_SESSION['ville'] = $connexion['ville'];
				$_SESSION['id_membre'] = $connexion['id_membre'];
				header('Location: membres.php?id_membre=' . $_SESSION['id_membre']);
			}
		}

	}
}	
