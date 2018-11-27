<?php


$dir = dirname(dirname($_SERVER['SCRIPT_NAME']));
echo $dir;
require $dir."/model/Post.php";

$title = "forum";
$path = "./view/forum.php";

require "./view/header.php";
