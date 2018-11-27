<?php

require "MyPDO.php";

class Actualite {
	private $id_user_from;
	private $id_user_to;
	private $message;
	private $datetime;

	public function __construct(){

	}

	public function getId_user_from(){return $this->id_user_from;}
	public function setId_user_from($id_user_from){$this->id_user_from = $id_user_from;}

	public function getId_user_to(){return $this->id_user_to;}
	public function setId_user_to($id_user_to){$this->id_user_to = $id_user_to;}

	public function getMessage(){return $this->message;}
	public function setMessage($msg){$this->message = $msg;}

	public function getDatetime(){return $this->datetime;}
	public function setDatetime($datetime){$this->datetime = $datetime;}

	public function create(){
		$myPDO = new MyPDO;
		$sql = "INSERT INTO chat (id_user_from, id_user_to, message, datetime) VALUES (?, ?, ?, ?)";
		$mPdoSql = $myPDO->prepare($sql);
		$mPdoSql->bindParam(1, $this->id_user_from);
		$mPdoSql->bindParam(2, $this->id_user_to);
		$mPdoSql->bindParam(3, $this->message);
		$mPdoSql->bindParam(4, $this->datetime);
		$mPdoSql->execute();
	}

	public function update(){
		$myPDO = new MyPDO();
		$sql = "UPDATE chat SET message = ? WHERE id_user_from = ?AND id_user_to = ? AND datetime = ?";
		$mPdoSql = $myPDO->prepare($sql);
		$mPdoSql->bindParam(1, $this->message);
		$mPdoSql->bindParam(2, $this->id_user_from);
		$mPdoSql->bindParam(3, $this->id_user_to);
		$mPdoSql->bindParam(4, $this->datetime);
		$mPdoSql->execute();
	}

	// public function delete(){
	// 	$myPDO = new MyPDO();
	// 	$sql = 'DELETE FROM chat WHERE id = ?';
	// 	$mPdoSql = $myPDO->prepare($sql);
	// 	$mPdoSql->bindParam(1, $this->id);
	// 	$mPdoSql->execute();
	// }

	public static function getAllMessages($id_user_from, $id_user_to){
		$myPDO = new MyPDO();
		$sql = "SELECT * FROM chat WHERE id_user_from = ? AND id_user_to = ?";
		$mPdoSql = $myPDO->prepare($sql);
		$mPdoSql->bindParam(1, $this->id_user_from);
		$mPdoSql->bindParam(2, $this->id_user_to);
		return array_map('reset', $mPdoSql->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC));
	}