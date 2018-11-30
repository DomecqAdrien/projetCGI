<?php

$this->loadModel('MyPdo');

class Adherent {
 
    private $id_user;
    private $status;
    private $debut_adherent;
    private $fin_adherent;

    public function __construct($id = null){

        if (isset($id)) {
            $myPDO = new MyPDO();
            $sql = "SELECT * FROM adherent WHERE id = ?";
            $mPdoSql = $myPDO->prepare($sql);
            $mPdoSql->bindParam(1, $id);
            $mPdoSql->execute();

            $result = $mPdoSql->fetch(PDO::FETCH_OBJ);

            $this->id_user = $result->id_user;
            $this->status = $result->status;
            $this->debut_adherent = $result->debut_adherent;
            $this->fin_adherent = $result->fin_adherent;
            
            
        }
    }

    public function create(){

        $bd = new MyPDO();
        $query = "INSERT INTO adherents VALUES 
        (:id_user,:status,:debut_adherent,:fin_adherent)";
       

        /* Exécute la requête */
        try{
            $req = $bd->prepare($query);

            $req->execute(array(
              ':id_user' => $this->id_user,
              ':status' => $this->status, 
              ':debut_adherent'=> $this->debut_adherent, 
              ':fin_adherent' => $this->fin_adherent
            ));
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function update(){
        $myPDO = new MyPDO();
        $sql = "UPDATE adherent SET status = :status WHERE id_user = :id_user";
        $mPdoSql = $myPDO->prepare($sql);
        $mPdoSql->execute(array(
            ':status' => $this->status, 
            ':id_user' => $this->id_user
        ));
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($idUser) {
        $this->id_user = $idUser;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getDebutAdherent() {
        return $this->debut_adherent;
    }

    public function setDebutAdherent($debutAdherent) {
        $this->debut_adherent = $debutAdherent;
    }

    public function getFinAdherent() {
        return $this->fin_adherent;
    }

    public function setFinAdherent($finAdherent) {
        $this->fin_adherent = $finAdherent;
    }
}
