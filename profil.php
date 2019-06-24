<?php

require_once('class_connexion.php');
require_once('Bdd.php');
require_once('formulaire.php');

class Profil extends Connexion {
	
	function __construct() {
		parent::__construct();
	}

	public function profil() {
		if ($connexion = true) {
			$req = $this->bdd->prepare("SELECT * FROM membres WHERE id_membre = :id_membre");
			$req->execute(array(
				':id_membre' => $connexion['id_membre'],
			));
			$req->fetch();

		}
	}	
}

?>