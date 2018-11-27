<?php

require "MyPDO.php";

class Post{
	private $id;
	private $titre;
	private $dateCreation;
	private $dateEdition;
	private $contenu;
	private $important;
	private $id_user;

	public function __construct($id = null){

		$bd = new MyPDO();
		$query = "INSERT INTO posts (titre, dateCreation, contenu, important, id_user) 
			VALUES (:titre,:dateCreation,:contenu,:important, :id_user)";
	   

	    /* Exécute la requête */
	    try{
	    	$req = $bd->prepare($query);

	    	$req->execute(array(
		      ':titre' => $this->titre,
		      ':dateCreation' => new Date("yyyy-mm-dd hh:mm:ss"), 
		      ':contenu'=> $this->contenu, 
		      ':important' => $this->important,
		      ':id_user' => $this->id_user,
		    ));
	    }
	    catch (Exception $e){
	    	die($e->getMessage());
	    }
	}




    public function getId()
    {
        return $this->id;
    }


    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        
    }

    public function getdateCreation()
    {
        return $this->dateCreation;
    }

    public function setdateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        
    }

    public function getdateEdition()
    {
        return $this->dateEdition;
    }

    public function setdateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;
   
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
}