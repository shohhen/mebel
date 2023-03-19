<?php 
//  echo "salom";


// Front controller


// Umumiy nastroykalar
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);

// Fayl tizimiga ulanish
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/components/Router.php');



// Bazaga ulanish
require_once(ROOT.'/components/Db.php');

// Routerni chaqirish
$router = new Router();
$router->run();

?>