<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__)) {
	header("location:index.php");
	die();
}

use Analistics\Customers\Commom\Api;
use Analistics\Customers\Commom\Session;
use Analistics\Customers\Commom\ApiArrays;
use Analistics\Customers\Commom\Functions;
use Analistics\Customers\Commom\Application;
use Analistics\Customers\Commom\HttpRequest;
use Analistics\Commom\Resources\StringsValues;
use Analistics\Customers\Commom\Dtos\ConfigItem;
use Analistics\Customers\Commom\Resources\LanguageValues;
use Analistics\Customers\Commom\Adapter\RedBeanPHPAdapter;
use Analistics\Customers\Commom\ApplicationMenus;
use Analistics\Customers\Commom\Menu;
use Analistics\Customers\TokenManegement\TokenDataBaseRepository;
require_once(__DIR__."/vendor/autoload.php");
define("API_ANALISTICS","ANL");
define("APP_ID","Application");
define("APP_LIMIT_INATIVO_TOKEN",60);
session_start();
require_once(__DIR__."/Application.php");
$request =  (new HttpRequest())->getAll();
$session = new Session();
$connection =new RedBeanPHPAdapter();


if( strpos(basename($_SERVER['SCRIPT_NAME']),'index')===false  &&  
    strpos(basename($_SERVER['SCRIPT_NAME']),'auth-sign-up')===false &&  
    strpos(basename($_SERVER['SCRIPT_NAME']),'auth-signup')===false  ){
    if(!isset($request['SERVER_SOFTWARE_AUTH'])){
        session_destroy();
        header("location:index");die;
    }
}

if(isset($request['SERVER_SOFTWARE_AUTH'])){
    $TokenRepository = new TokenDataBaseRepository($connection);
    if(!$TokenRepository->validateToken($_SESSION['SERVER_SOFTWARE_AUTH'])){
        session_destroy();
        header("location:index");die;
    }
}
 
try{
    $ApplicationMenus = new ApplicationMenus();    
    $ApplicationMenus->addMenu(new Menu("Dashboard","painel","painel","<i class=\"feather icon-home\"></i>",0));






    $resources=array(
        "language"=>new LanguageValues(),
        "menus"=>$ApplicationMenus->getAll()
    );
    //Define as Apis Usadas
    $ApiArrays = new ApiArrays();
    $ApiArrays->append((new Api(API_ANALISTICS,"Api principal do Sistema"))->append(new ConfigItem("password","123456789"))->append(new ConfigItem("url","http://localhost/smdataanlystic/public")));
    $App =  new Application(new HttpRequest(),new Functions(),new Session(),$ApiArrays,$resources);
}catch(Exception $e){
    echo sprintf("<h1>%s</h1>",$e->getMessage());
}
 


?>