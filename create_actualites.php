<?php
require_once 'model/Actualite.php';

if(!empty($_POST)) {
    $actualite = new Actualite();
    
    $actualite->setTitre($_POST['titre']);
    $actualite->setDescription($_POST['description']);
    $date = new DateTime();
    $date->modify("+1 hour");
    $actualite->setDate($date->format("Y-m-d h:i:s"));
    $actualite->create();
    $title = "Actualités";
	$path = "actualites.php";

	require 'actualites.php';
}
else {
	$title = "Create actualite";
	$path = "./view/create_actualites.php";

	require './view/header.php';
}

?>