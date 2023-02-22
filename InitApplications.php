<?php

use RedBeanPHP\R;
use Analistics\Customers\Commom\Jwt;
use Analistics\Customers\Commom\HttpRequest;
require_once(__DIR__."/vendor/autoload.php");
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__)) {
	header("location:index.php");
	die();
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once(__DIR__."/rb.php");

if( strpos(basename($_SERVER['SCRIPT_NAME']),'index')===false  
    &&  strpos(basename($_SERVER['SCRIPT_NAME']),'auth-sign-up')===false 
    &&  strpos(basename($_SERVER['SCRIPT_NAME']),'auth-signup')===false  ){
    
    if(!isset($request['SERVER_SOFTWARE_AUTH'])){
        session_destroy();
        header("location:index");die;
    }
}

if(isset($request['SERVER_SOFTWARE_AUTH'])){
    $token = R::findOne('tokens',' tokenlocal = ? ',array( $_SESSION['SERVER_SOFTWARE_AUTH']));
    $time = strtotime(date('Y/m/d H:m:s')) - intval($token->timestrtotime);
    if($time > $token->limit){
        session_destroy();
        header("location:index");die;
    }
    $token->timestrtotime =strtotime(date('Y/m/d H:m:s'));
    $token->update_at = R::isoDateTime();
    R::store( $token );
}


 

?>