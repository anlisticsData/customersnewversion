<?php

use RedBeanPHP\R;
use Analistics\Customers\Commom\Jwt;
use Analistics\Customers\Commom\HttpRequest;
session_start();
define("APP_ID","Application");
define("APP_LIMIT_INATIVO_TOKEN",60);
 
require_once(__DIR__."/vendor/autoload.php");
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__)) {
	header("location:index.php");
	die();
}
R::setup('mysql:host=localhost;dbname=customersv4','dev','@Dev1234');

$Jwt=new Jwt("3218670456456das456d4as4das1xc1as891x89as9121231315648946sa55s5as4a1x15");
$request =  (new HttpRequest())->getAll();

