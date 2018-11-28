<?php

$dir = dirname(dirname($_SERVER['SCRIPT_NAME']));
require "../model/Post.php";

if($_POST){
  session_start();
  $post = new Post();

  $post->setTitre($_POST['titre']);

  $date = new DateTime();
  $date->modify("+1 hour");
  $post->setDateCreation($date->format("Y-m-d h:i:s"));

  $post->setContenu($_POST['contenu']);
  $important = (empty($_POST['important'])) ? 0 : $_POST['important'];
  $post->setImportant($important);
  $post->setIdUser($_SESSION['id']);

  $post->create();
}

$title = "forum";
$path = "../view/forum/new.php";

require "../view/header.php";
