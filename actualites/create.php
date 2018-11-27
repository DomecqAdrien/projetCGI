<?php
require_once '../model/Actualite.php';

$dir = $dir = dirname(dirname($_SERVER['SCRIPT_NAME']));

if($_POST) {
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

$title = "Create actualite";
$path = "../view/actualites/create.php";

require '../view/header.php';


?>