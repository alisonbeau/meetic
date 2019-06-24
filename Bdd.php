<?php

Class Database {

	private $bd_name;
	private $bd_user;
	private $bd_mdp;
	private $bd_host;
	public $bdd;

	public function __construct($bd_name = "my_meetic", $bd_user = "root", $bd_mdp = "", $bd_host ="localhost") {
		$this->bd_name = $bd_name;
		$this->bd_user = $bd_user;
		$this->bd_mdp = $bd_mdp;
		$this->bd_host = $bd_host;
	    $this->bdd = new PDO("mysql:host=$bd_host;dbname=$bd_name", $bd_user, $bd_mdp);       // Connexion 
	    $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}

// try {
// 	$bdd = new Database();
// } catch (Exception $e) {

// }
// var_dump($bdd->bdd);

?>