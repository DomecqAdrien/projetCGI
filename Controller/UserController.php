<?php

class UserController extends Controller{

    function login(){
        $this->loadModel('User');
        if($_POST){
            if(!empty($_POST['mail']) && !empty($_POST['password'])){

                $login = User::GetOneByMail($_POST['mail']);

                if(!empty($login)){
                    if(hash("sha256", $_POST['password'].$login->salt) == $login->password){
                        foreach ($login as $key => $value) {
                            $_SESSION[$key] = $value;
                        }

                        $this->redirect('accueil');
                    }
                    else {
                        $d['message'] = array('type' => 'danger', 'message' => 'Mot de passe incorrect');
                    }
                }
                else {
                    $d['message'] = array('type' => 'danger', 'message' => 'Email incorrect');

                }             
            } 
            else {
                $d['message'] = array('type' => 'danger', 'message' => 'Login ou mot de passe incorrect');
                
            }
            $this->set($d);

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
            //$this->redirect('user/login');
            
        }
    }

    function adherer(){
        $this->loadModel('Adherent');
        if($_POST){
            $newAdherent = new Adherent();
            $newAdherent->setStatus('en cours');

            $date = new DateTime();
            $date->modify("+1 hour");
            $newAdherent->setDebutAdherent($date->format("Y-m-d h:i:s"));
            $date->modify("+1 Year");
            $newAdherent->setFinAdherent($date->format("Y-m-d h:i:s"));
            $newAdherent->setIdUser($_SESSION['id']);
            $newAdherent->create();
            var_dump($newAdherent);
        }
    }
}