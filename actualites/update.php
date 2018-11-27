<?php
require_once '../model/Actualite.php';

$dir = dirname(dirname($_SERVER['SCRIPT_NAME']));

if(!empty($_GET)){
    $actualite = new Actualite($_GET['id']);
}

if(!empty($_POST)) {
    $actualite = new Actualite();
    
    $actualite->setId($_POST['id']);
    $actualite->setTitre($_POST['titre']);
    $actualite->setDescription($_POST['description']);
    $actualite->update();
	$title = "Actualités";
	$path = "actualites.php";
	header('Location: actualites');
}
else {
	$title = "Update actualite";
	$path = "../view/actualites/update.php";
	require '../view/header.php';
}

?>