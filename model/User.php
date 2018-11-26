<?php 

require "MyPDO.php";

class User{
	private $id;
	private $nom;
	private $prenom;
	private $mail;
	private $dateNaissance;
	private $password;
	private $salt;
	private $role;

	public function __construct($id = null){
		
	}

	public function create(){

		$bd = new MyPDO();
		$query = "INSERT INTO user (nom, prenom, mail, dateNaissance, password, salt) 
			VALUES (:nom,:prenom,:mail,:dateNaissance, :password, :salt)";
	   

	    /* Exécute la requête */
	    try{
	    	$req = $bd->prepare($query);

	    	$req->execute(array(
		      ':nom' => $this->nom,
		      ':prenom' => $this->prenom, 
		      ':mail'=> $this->mail, 
		      ':dateNaissance' => $this->dateNaissance,
		      ':password' => $this->password,
		      ':salt' => $this->salt
		    ));
	    }
	    catch (Exception $e){
	    	die($e->getMessage());
	    }
	    
	}

	public function getId(){return $this->id;}

	public function getNom(){return $this->nom;}
	public function setNom($nom){$this->nom=$nom;}

	public function getPrenom(){return $this->prenom;}
	public function setPrenom($prenom){$this->prenom=$prenom;}

	public function getMail(){return $this->mail;}
	public function setMail($mail){$this->mail=$mail;}

	public function getDateNaissance(){return $this->dateNaissance;}
	public function setDateNaissance($dateNaissance){$this->dateNaissance=$dateNaissance;}

	public function getPassword(){return $this->password;}
	public function setPassword($password){
		$this->salt = uniqid(mt_rand(), true);
		var_dump($this->salt);
		$this->password=hash("sha256",$password.$this->salt);
		var_dump($this->password);
	}

	public function getSalt(){return $this->salt;}

	public function getRole(){return $this->role;}
	public function setRole($role){$this->role=$role;}
}