<?php
require_once 'model/Actualite.php';

if(!empty($_POST)) {
    $actualite = new Actualite();
    
    $actualite->setId($_POST['id']);
    $actualite->setTitre($_POST['titre']);
    $actualite->setDescription($_POST['description']);
    //$actualite->create());
}

$title = "Create actualite";
$path = "./view/create_actualites.php";

require './view/header.php';

?>