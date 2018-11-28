<?php 

define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define('COMPONENTS',ROOT.DS.'components');
define('CORE',ROOT.DS.'core');
define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));

if (session_status() == PHP_SESSION_NONE) session_start();

require CORE.DS.'includes.php';
new Dispatcher();



