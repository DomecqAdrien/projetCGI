<?php
require_once 'model/Actualite.php';

if(!empty($_GET)){
    $actualite = new Actualite($_GET['id']);
}

if(!empty($_POST)) {
    $actualite = new Actualite();
    
    $actualite->setId($_POST['id']);
    $actualite->setTitre($_POST['titre']);
    $actualite->setDescription($_POST['description']);
    $actualite->update());
}


$title = "Update actualite";
$path = "./view/update_actualites.php";


require './view/header.php';

?>