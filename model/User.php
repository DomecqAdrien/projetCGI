<?php 

require "myPDO.php";

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
	public function setPassword($password){$this->password=$password;}

	public function getSalt(){return $this->salt;}

	public function getRole(){return $this->role;}
	public function setRole($role){$this->role=$role;}
}