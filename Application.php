<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Analistics\Customers\Commom\Api;
use Analistics\Customers\Commom\Session;
use Analistics\Customers\Commom\ApiArrays;
use Analistics\Customers\Commom\Functions;
use Analistics\Customers\Commom\Application;
use Analistics\Customers\Commom\HttpRequest;
use Analistics\Customers\Commom\Dtos\ConfigItem;
require_once(__DIR__."/vendor/autoload.php");
require_once(__DIR__."/rb.php");
define("API_ANALISTICS","ANL");
//Define as Apis Usadas
$ApiArrays = new ApiArrays();
$ApiArrays->append((new Api(API_ANALISTICS,"Api principal do Sistema"))->append(new ConfigItem("password","123456789"))->append(new ConfigItem("url","http://localhost/smdataanlystic/public")));
$App =  new Application(new HttpRequest(),new Functions(),new Session(),$ApiArrays);
?>