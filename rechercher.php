<?php 

require_once('Bdd.php');

Class Rechercher extends Database {

	public function recherche() {
		if (!empty($_POST['sexe']) || !empty($_POST['age']) || !empty($_POST['cp'])) {
			
			$arr = [];

			if (!empty($_POST['sexe'])) {
				$arr[':sexe'] = $_POST['sexe'];
			}

			$ville = '';
			if (!empty($_POST['ville'])) {
				$arr[':ville'] = "%".$_POST['ville']."%"; 
				$ville = " AND ville LIKE :ville ";
			}


			$recherche = $this->bdd->prepare("SELECT prenom, date_de_naissance, ville 
											FROM membres 
											WHERE sexe = :sexe $ville");
			$recherche->execute($arr);
			
			foreach ($recherche->fetchAll() as $value) {
				echo "<p class='info'>"."Prenom: ".$value['prenom']."</p>"."<p class='info'> Date naissance: ".$value['date_de_naissance']."</p>"."<p class='info'> Ville: ".$value['ville']."</p>" . "<br>";

			}

		}
	}
}