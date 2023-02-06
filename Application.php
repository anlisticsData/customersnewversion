<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use Analistics\Customers\Commom\Functions;
use Analistics\Customers\Commom\Application;
use Analistics\Customers\Commom\HttpRequest;
use Analistics\Customers\Commom\Session;
require_once(__DIR__."/vendor/autoload.php");
require_once(__DIR__."/rb.php");
$App =  new Application(new HttpRequest(),new Functions(),new Session());
?>