<?php 

$this->loadModel('MyPdo');

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

		if (isset($id)) {
            $myPDO = new MyPDO();
            $sql = "SELECT * FROM user WHERE id = ?";
            $mPdoSql = $myPDO->prepare($sql);
            $mPdoSql->bindParam(1, $id);
            $mPdoSql->execute();

            $result = $mPdoSql->fetch(PDO::FETCH_OBJ);

            $this->id = $result->id;
            $this->nom = $result->nom;
            $this->prenom = $result->prenom;
            $this->mail = $result->mail;
            $this->dateNaissance = $result->dateNaissance;
            $this->password = $result->password;
            $this->salt = $result->salt;
            $this->role = $result->role;
            
            
        }
		
	}

	public function create(){

		$bd = new MyPDO();
		$query = "INSERT INTO user (nom, prenom, mail, dateNaissance, password, salt, role) 
			VALUES (:nom,:prenom,:mail,:dateNaissance, :password, :salt, :role)";
	   

	    /* Exécute la requête */
	    try{
	    	$req = $bd->prepare($query);

	    	$req->execute(array(
		      ':nom' => $this->nom,
		      ':prenom' => $this->prenom, 
		      ':mail'=> $this->mail, 
		      ':dateNaissance' => $this->dateNaissance,
		      ':password' => $this->password,
		      ':salt' => $this->salt,
		      ':role' => 'user'
		    ));
	    }
	    catch (Exception $e){
	    	die($e->getMessage());
	    }
	    
	}

	public static function getOneByMail($mail){
		$bd = new MyPDO();
		$query = "SELECT * FROM  user WHERE mail = :mail";
		$req = $bd->prepare($query);

		$req->execute(array(
			':mail' => $mail
		));
		return $req->fetch(PDO::FETCH_OBJ);

	}

	public static function getOneById($id){
		$bd = new MyPDO();
		$query = "SELECT * FROM  user WHERE id = :id";
		$req = $bd->prepare($query);

		$req->execute(array(
			':id' => $id
		));
		return $req->fetch(PDO::FETCH_OBJ);

	}

	public static function getAllUsers($id){
		$bd = new MyPDO();
		$query = "SELECT id, nom, prenom, role FROM user WHERE id != :id";
		$req = $bd->prepare($query);
		$req->execute(array(
			':id' => $id
		));
		return $req->fetchAll(PDO::FETCH_OBJ);
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