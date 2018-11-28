<?php

$this->loadModel('MyPdo');

class Actualite {
	private $id;
	private $titre;
	private $description;
	private $date;

	public function __construct($id = null){
		if (isset($id)) {
			$myPDO = new MyPDO();
			$sql = "SELECT * FROM actualites WHERE id = ?";
			$mPdoSql = $myPDO->prepare($sql);
			$mPdoSql->bindParam(1, $id);
			$mPdoSql->execute();
			$result = $mPdoSql->fetch(PDO::FETCH_ASSOC);

			$this->id = $result['id'];
			$this->titre = $result['titre'];
			$this->description = $result['description'];
			$this->date = $result['date'];
		}
	}

	public function getId(){return $this->id;}
	public function setId($id){$this->id = $id;}
	
	public function getTitre(){return $this->titre;}
	public function setTitre($titre){$this->titre = $titre;}

	public function getDescription(){return $this->description;}
	public function setDescription($desc){$this->description = $desc;}

	public function getDate(){return $this->date;}
	public function setDate($date){$this->date = $date;}

	public function create(){
		$myPDO = new MyPDO;
		$sql = "INSERT INTO actualites (titre, description, date) VALUES (?, ?, ?)";
		$mPdoSql = $myPDO->prepare($sql);
		$mPdoSql->bindParam(1, $this->titre);
		$mPdoSql->bindParam(2, $this->description);
		$mPdoSql->bindParam(3, $this->date);
		$mPdoSql->execute();
	}

	public function update(){
		$myPDO = new MyPDO();
		$sql = "UPDATE actualites SET titre = ?, description = ? WHERE id = ?";
		$mPdoSql = $myPDO->prepare($sql);
		$mPdoSql->bindParam(1, $this->titre);
		$mPdoSql->bindParam(2, $this->description);
		$mPdoSql->bindParam(3, $this->id);
		$mPdoSql->execute();
	}

	public function delete(){
		$myPDO = new MyPDO();
		$sql = 'DELETE FROM actualites WHERE id = ?';
		$mPdoSql = $myPDO->prepare($sql);
		$mPdoSql->bindParam(1, $this->id);
		$mPdoSql->execute();
	}

	public static function getAllActualites(){
		$myPDO = new MyPDO();
		$sql = "SELECT * FROM actualites";
		$mPdoSql = $myPDO->query($sql);
		return array_map('reset', $mPdoSql->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC));
	}
}

?>