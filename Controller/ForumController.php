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

		    $actualite = new Post();
		    
		    $actualite->setTitre($_POST['titre']);
		    $actualite->setDescription($_POST['description']);
		    $date = new DateTime();
		    $date->modify("+1 hour");
		    $actualite->setDate($date->format("Y-m-d H:i:s"));
		    $actualite->create();

		    $message = array('type' => 'success', 'message' => 'Creation actualite réussie');
			header('Location: actualites');
		}
    }

    function post($id){
    	$this->loadModel('Post');
    	$this->loadModel('User');

    	$d['post'] = new Post($id);
    	$d['user'] = new User($d['post']->getIdUser());

    	$this->set($d);
    }


}