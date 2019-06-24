<?php

require_once('Bdd.php');


class Form extends Database {

	public $errors = [];
	public $sexe = '';   
	public $nom = '';
	public $prenom = '';
	public $dates = '';
	public $ville = '';
	public $cp = '';
	public $email = '';
	public $mdp = '';

	public function insert($sexe, $nom, $prenom, $dates, $ville, $cp, $email, $mdp) {
		$this->sexe = $sexe;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->dates = $dates;
		$this->ville = $ville;
		$this->cp = $cp;
		$this->email = $email;
		$this->mdp = $mdp;

		try {
			$req = $this->bdd->prepare('INSERT INTO membres(sexe, nom, prenom, date_de_naissance, ville, cp, email, mdp) VALUES(:sexe, :nom, :prenom, :dates, :ville, :cp, :email, :mdp)');
			$req->execute(array(
				':sexe' => $sexe,
				':nom' => $nom,
				':prenom' => $prenom,
				':dates' => $dates,
				':ville' => $ville,
				':cp' => $cp,
				':email' => $email,
				':mdp' => $mdp
				));
		} catch(PDOException $e) {
			if (!empty($req->errorInfo()[2])) {
				return $req->errorInfo()[2];
			}
		}
			return "success";
	}


	public function check(){
		$this->check_nom($_POST['nom']);
		$this->check_prenom($_POST['prenom']);
		$this->check_cp($_POST['cp']);
		$this->check_email($_POST['email']);
		$this->check_dates($_POST['dates']);
		$this->check_date($_POST['dates'], $_POST['email']);
		if (empty($this->errors)){
			$ret_insert = $this->insert($_POST['sexe'], $_POST['nom'], $_POST['prenom'], $_POST['dates'], $_POST['ville'], $_POST['cp'], $_POST['email'], sha1($_POST['mdp']));
			if ($ret_insert != 'success') {
				array_push($this->errors, $ret_insert);
			} else  {
				return true; // pas d'erreur
			}
		}
			return false;
	}


		public function check_nom($nom) {
			if (preg_match("/^[A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]{2,30}$/", $nom)) {
			} else {
				array_push($this->errors, "Veuillez entrée un nom correcte.");
			}
		}

		public function check_prenom($prenom) {
			if (preg_match("/^[A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]{2,30}$/", $prenom)) {
			} else {
				array_push($this->errors, "Veuillez entrée un prenom correcte.");
			}
		}


		public function check_email($email) {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errors, "Votre adresse email n'est pas valide.");
			}
		}

		public function check_cp($cp) {
			if (preg_match("/^[0-9]{5}$/", $cp)) {
			} else {
				array_push($this->errors, "Veuillez entrée un code postal valide.");
			}
		}

		public function check_dates($dates) {
			if (preg_match("/^[-0-9]{10}$/", $dates)) {
			} else {
				array_push($this->errors, "Veuillez entrée une date de naissance valide et au format indiqué.");
			}
		}

		public function check_date($date, $email) {
			$current_date = getdate()['year'];
			preg_match("/\d{4}/", $date, $match); //match est un tableau qui contient tout ce qui correspond à ce regex donc l'année.
			$age = $current_date - $match[0];
				if ($age < 18) {	
					array_push($this->errors, "Le site est reservé au plus de 18 ans");
				}
		}
}
