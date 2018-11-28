<?php

class ForumController extends Controller{

    function forum(){
        $this->loadModel('Post');

        $d['posts'] = Post::getAll();
        $this->set($d);

    }

    function new(){
        if($_POST) {
        	$this->loadModel('Post');

		    $actualite = new Actualite();
		    
		    $actualite->setTitre($_POST['titre']);
		    $actualite->setDescription($_POST['description']);
		    $date = new DateTime();
		    $date->modify("+1 hour");
		    $actualite->setDate($date->format("Y-m-d h:i:s"));
		    $actualite->create();

		    $message = array('type' => 'success', 'message' => 'Creation actualite réussie');
			header('Location: actualites');
		}
    }

    function post($id){
    	echo $id;

    }


}