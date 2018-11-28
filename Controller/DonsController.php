<?php

class DonsController extends Controller{

	function dons(){
		$this->loadModel('Dons');

		if($_POST){
			$don = new Dons();
			$don->setEmail($_POST['email']);
			$don->setCivilite($_POST['civilite']);
			$don->setNom($_POST['nom']);
	        $don->setPrenom($_POST['prenom']);
	        $don->setAdresse($_POST['adresse']);
	        $don->setVille($_POST['ville']);
	        $don->setCodePostal($_POST['codePostal']);
	        $don->setMontant($_POST['montant']);

	        $date = new DateTime();
			$date->modify("+1 hour");
	        $don->setDate($date->format("Y-m-d h:i:s"));
	        $don->create();
		}
	}
}

?>