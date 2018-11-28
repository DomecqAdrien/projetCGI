<?php


$dir = dirname(dirname($_SERVER['SCRIPT_NAME']));
require "../model/Post.php";


$posts = Post::getAll();



$title = "forum";
$path = "../view/forum/forum.php";

require "../view/header.php";
