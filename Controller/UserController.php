<?php

class UserController extends Controller{

    function login(){
        $this->loadModel('User');
        if($_POST){
            debug($_POST);

            $login = User::GetOneByMail($_POST['mail']);

            debug($login);

            if(hash("sha256", $_POST['password'].$login->salt) == $login->password){
                session_start();
                foreach ($login as $key => $value) {
                    $_SESSION[$key] = $value;
                }

                $message = array('type' => 'success', 'message' => 'Connexion réussie');

                //header('Location: accueil');
            }
        }
    }

    function logout(){
        session_start();
        session_destroy();

        $this->redirect('accueil');
    }

    function signup(){
        if($_POST){
            var_dump($_POST);
            $this->loadModel('User');
            $newUser = new User();
            $newUser->setNom($_POST['nom']);
            $newUser->setPrenom($_POST['prenom']);
            $newUser->setDateNaissance($_POST['dateNaissance']);
            $newUser->setMail($_POST['mail']);
            $newUser->setPassword($_POST['password']);

            $newUser->create();

            $this->redirect('user/login');

        }
    }
}