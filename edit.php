<?php

require_once('profil.php');
require_once('Bdd.php');
require_once('class_connexion.php');


class Edit extends Profil {
	
	function __construct() {
		parent::__construct();
	}

	public function edit_profil() {
		$sql = "UPDATE membres SET ";
		$arrStr = [];
		$arrData = [];

		
		if (!empty($_POST["ville"])) {
			$arrStr[] = "ville = ?";
			$arrData[] = $_POST["ville"];
		}

		if (!empty($_POST["cp"])) {
			$arrStr[] = "cp = ?";
			$arrData[] = $_POST["cp"];
		}

		if (!empty($_POST["email"])) {
			$arrStr[] = "email = ?";
			$arrData[] = $_POST["email"];
		}

		if (!empty($_POST["mdp"])) {
			$arrStr[] = "mdp = ?";
			$arrData[] = sha1($_POST["mdp"]);
		}

		$sql .= implode(", ", $arrStr);
		$sql .= " WHERE id_membre = ?";
		$champs = $this->bdd->prepare($sql);
		$arrData[] = $_SESSION['id_membre'];
		$champs->execute($arrData);
	}
}