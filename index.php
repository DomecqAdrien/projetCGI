<?php 

define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define('COMPONENTS',ROOT.DS.'components');
define('CORE',ROOT.DS.'core');
define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));

require CORE.DS.'includes.php';
new Dispatcher();



