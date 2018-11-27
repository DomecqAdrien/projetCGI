<?php

require_once '../model/Actualite.php';

$dir = dirname(dirname($_SERVER['SCRIPT_NAME']));
$title = "Actualités";
$path = "../view/actualites/actualites.php";

$a_actualites = Actualite::getAllActualites();

require "../view/header.php";