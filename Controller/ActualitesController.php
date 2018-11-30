<?php

class ActualitesController extends Controller{

    function index(){
        $this->loadModel('Actualite');
        $data['a_actualites'] = Actualite::getAllActualites();
        $this->set($data);
    }

    function create(){
        if($_POST) {

            $this->loadModel('Actualite');

            $actualite = new Actualite();
            
            $actualite->setTitre($_POST['titre']);
            $actualite->setDescription($_POST['description']);
            $date = new DateTime();
            $date->modify("+1 hour");
            $actualite->setDate($date->format("Y-m-d H:i:s"));
            $actualite->create();

            $message = array('type' => 'success', 'message' => 'Creation actualite réussie');
            $this->redirect('actualites');
        }
    }

    function update(){
        $this->loadModel('Actualite');
        if(!empty($_GET)){
            $data['actualite'] = new Actualite($_GET['id']);
            $this->set($data);
        }

        if(!empty($_POST)) {
            $actualite = new Actualite();
            
            $actualite->setId($_POST['id']);
            $actualite->setTitre($_POST['titre']);
            $actualite->setDescription($_POST['description']);
            $actualite->update();
            $title = "Actualités";
            $path = "actualites.php";
            $this->redirect('actualites');
        }
    }

    function delete(){
        $this->loadModel('Actualite');

        if(isset($_GET['id'])){
            $actualite = new Actualite($_GET['id']);
            $actualite->delete();
        }

        $this->redirect('actualites');
    }

}