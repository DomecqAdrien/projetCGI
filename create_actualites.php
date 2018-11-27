<?php
require_once 'model/Actualite.php';

if($_POST) {
    $actualite = new Actualite();
    
    $actualite->setTitre($_POST['titre']);
    $actualite->setDescription($_POST['description']);
    $date = new DateTime();
    $date->modify("+1 hour");
    $actualite->setDate($date->format("Y-m-d h:i:s"));
    $actualite->create();

	header('Location: actualites');
}

$title = "Create actualite";
$path = "./view/create_actualites.php";

require './view/header.php';


?>