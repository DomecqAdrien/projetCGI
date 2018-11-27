<?php

require_once '../model/Actualite.php';

$title = "Actualités";
$path = "../view/actualites/actualites.php";

$a_actualites = Actualite::getAllActualites();

require "../view/header.php";