<?php

$this->loadModel('MyPDO');

class Commentaire {

    private $id_post;
    private $id_user;
    private $date;
    private $contenu;

    public function __construct(){

    }

    public function create(){
        $bd = new MyPDO();
        $query = "INSERT INTO commentaires VALUES (:id_post,:id_user,:date,:contenu)";   

        /* Exécute la requête */
        try{
            $req = $bd->prepare($query);

            $req->execute(array(
              ':id_post' => $this->id_post,
              ':id_user' => $this->id_user, 
              ':date'=> $this->date, 
              ':contenu' => $this->contenu
            ));
        }
        catch (Exception $e){
            die($e->getMessage());
        }

    }

    public static function getByIdPost($id){
        $myPDO = new MyPDO();
        $sql = "SELECT * FROM commentaires WHERE id_post = :id_post";
        $req = $myPDO->prepare($sql);
        $req->execute(array(':id_post' => $id));
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getCountCommentsById($id){
        $myPDO = new MyPDO();
        $sql = "SELECT COUNT(id_post) as nbCommentaires FROM commentaires WHERE id_post = :id_post";
        $req = $myPDO->prepare($sql);
        $req->execute(array(':id_post' => $id));
        return $req->fetch(PDO::FETCH_OBJ);
    }

    public function getIdPost() {
        return $this->id_post;
    }

    public function setIdPost($idPost) {
        $this->id_post = $idPost;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($idUser) {
        $this->id_user = $idUser;
    }

    public function getDate() {
        return $this->data;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }
}