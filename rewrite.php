<?php

var_dump($_SERVER);
echo $_SERVER['REDIRECT_URL'];

if(preg_match('#news-([0-9-]+)\.html#isU', $_SERVER['REDIRECT_URL'], $match)){
	header("Status: 200 OK", false, 200);
	echo 'lol';
}
else{
	echo "rip";
}
//echo "lol";

echo $_SERVER['REDIRECT_URL'];


