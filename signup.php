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

	$newUser->create();

	header('Location: login');

}

$dir = dirname($_SERVER['SCRIPT_NAME']);
$title = "Créer un compte";
$path = "./view/signup.php";

require "./view/header.php";