<?php
require_once '../model/Actualite.php';

if(isset($_GET['id'])){
    $actualite = new Actualite($_GET['id']);
	$actualite->delete();
}

header('Location: actualites');
?>