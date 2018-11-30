<?php

class ForumController extends Controller{

    function forum(){
        $this->loadModel('Post');
        $this->loadModel('User');
        $this->loadModel('Commentaire');

        $d['users'] = User::getAll();
        $d['posts'] = Post::getAll();
        foreach ($d['posts'] as $post) {
            $post->nbCommentaires = Commentaire::getCountCommentsById($post->id)->nbCommentaires;
        }

        $this->set($d);
        

    }

    function new(){
        if($_POST) {
        	$this->loadModel('Post');

		    $actualite = new Post();
		    
		    $actualite->setTitre($_POST['titre']);
		    $actualite->setContenu($_POST['contenu']);
		    $date = new DateTime();
		    $date->modify("+1 hour");
		    $actualite->setDateCreation($date->format("Y-m-d H:i:s"));
            $important = (empty($_POST['important'])) ? 0 : $_POST['important'];
            $actualite->setImportant($important);
            $actualite->setIdUser($_SESSION['id']);
		    $actualite->create();

            debug($actualite);

		    $message = array('type' => 'success', 'message' => 'Creation actualite réussie');
<<<<<<< HEAD
			header('Location: forum');
=======
            $this->redirect('forum');
>>>>>>> 999982a7eb4bf8066a30163e0a5b9e479dc80125
		}
    }

    function post($id){
        $this->loadModel('Commentaire');
        if($_POST){
            $commentaire = new Commentaire();
            $commentaire->setIdPost($id);
            $commentaire->setIdUser($_SESSION['id']);
            $date = new DateTime();
            $date->modify("+1 hour");
            $commentaire->setDate($date->format("Y-m-d H:i:s"));
            $commentaire->setContenu($_POST['commentaire']);

            $commentaire->create();
        }
    	$this->loadModel('Post');
    	$this->loadModel('User');

    	$d['post'] = new Post($id);
    	$d['users'] = User::getAll();
        $d['commentaires'] = Commentaire::getByIdPost($id);

    	$this->set($d);

    }


}