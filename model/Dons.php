<?php

require "MyPDO.php";

class Dons{
	private $id;
	private $email;
	private $civilite;
	private $nom;
	private $prenom;
	private $adresse;
	private $ville;
	private $codePostal;
	private $montant;
	private $date;

	public function __construct($id = null){

	}

	public function create(){

		$bd = new MyPDO();
		$query = "INSERT INTO dons (email, civilite, nom, prenom, adresse, ville, codePostal, montant, date) 
			VALUES (:email, :civilite, :nom, :prenom, :adresse, :ville, :codePostal, :montant, :date)";
	   
	    /* Exécute la requête */
	    try{
	    	$req = $bd->prepare($query);

	    	$req->execute(array(
	    		':email' => $this->email,
	    		':civilite' => $this->civilite,
		      	':nom' => $this->nom,
		      	':prenom' => $this->prenom, 
		      	':adresse'=> $this->adresse, 
		      	':ville' => $this->ville,
		      	':codePostal' => $this->codePostal,
		      	':montant' => $this->montant,
		      	':date' => $this->date
		    ));
	    }

	    catch (Exception $e){
	    	die($e->getMessage());
	    }
	}

	public function getId(){return $this->id;}

	public function getEmail(){return $this->email;}
	public function setEmail($email){$this->email = $email;}

	public function getCivilité(){return $this->civilite;}
	public function setCivilite($civilite){$this->civilite = $civilite;}

	public function getNom(){return $this->nom;}
	public function setNom($nom){$this->nom=$nom;}

	public function getPrenom(){return $this->prenom;}
	public function setPrenom($prenom){$this->prenom=$prenom;}

	public function getAdresse(){return $this->adresse;}
	public function setAdresse($adresse){$this->adresse = $adresse;}

	public function getVille(){return $this->ville;}
	public function setVille($ville){$this->ville = $ville;}

	public function getCodePostal(){return $this->codePostal;}
	public function setCodePostal($codePostal){$this->codePostal = $codePostal;}

	public function getMontant(){return $this->montant;}
	public function setMontant($montant){$this->montant = $montant;}

	public function getDate(){return $this->montant;}
	public function setDate($montant){$this->montant = $montant;}

}

?>