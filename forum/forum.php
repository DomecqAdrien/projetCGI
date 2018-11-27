<?php


$dir = dirname(dirname($_SERVER['SCRIPT_NAME']));
echo $dir;
require "../model/Post.php";

$title = "forum";
$path = $dir."/view/forum.php";

require $dir."./view/header.php";
