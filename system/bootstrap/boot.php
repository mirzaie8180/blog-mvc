<?php 

session_start();

require_once('system/config.php');

require_once('system/bootstrap/Autoload.php');
$autoload = new \System\Bootstrap\Autoloader();
$autoload->autoloader();

$router = new \System\router\Routing();
$router->run();