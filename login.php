<?php

require "./model/User.php";

if($_POST){
	var_dump($_POST);
	$login = User::GetOneByMail($_POST['mail']);

	var_dump($login);

	if(hash("sha256", $_POST['password'].$login->salt) == $login->password){
		session_start();
		foreach ($login as $key => $value) {
			$_SESSION[$key] = $value;
		}

		$message = array('type' => 'success', 'message' => 'Connexion réussie');

		//header('Location: index');
	}


	
}


$dir = dirname($_SERVER['SCRIPT_NAME']);
$title = "Se connecter";
$path = "./view/login.php";

require "./view/header.php";