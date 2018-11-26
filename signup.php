<?php

require "./model/User.php";

if($_POST){
	var_dump($_POST);
	$newUser = new User();
	$newUser->setNom($_POST['nom']);
	$newUser->setPrenom($_POST['prenom']);
	$newUser->setDateNaissance($_POST['dateNaissance']);
	$newUser->setMail($_POST['mail']);
	$newUser->setPassword($_POST['password']);

}

$title = "Créer un compte";
require "./view/signup.php";