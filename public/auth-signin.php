<?php

use Analistics\Customers\Commom\Application;
use RedBeanPHP\R;
use PlugAnalistics\EndPointsServices;
use Analistics\Customers\Commom\HttpRequest;
use PlugAnalistics\AnaliticsDataIntegrationApi;
require_once(__DIR__."./../vendor/autoload.php");
require_once(__DIR__."./../rb.php");
$App =  new Application(new HttpRequest());
$request = $App->request()->getAll();
try{
    if(isset($request['SERVER_SOFTWARE_AUTH'])){
        $token = R::findOne('tokens',' tokenlocal = ? ',array( $_SESSION['SERVER_SOFTWARE_AUTH']));
        $token->timestrtotime =999999999999;
        $token->update_at = R::isoDateTime();
        $token->limit=9999;
        R::store( $token );
        session_destroy();
        header("location:../index");die;
    }
   
}catch(Exception $e){
    $App->logError($e->getMessage());
    if($App->hasErrors()){
        $_SESSION["APLICATION_RESPONSE"]=array(
            "hasError" => $App->hasErrors(),
            "messagens" => $errors,
            "sessionType" => 0
        );
        header("location:../index");
        die;
    }
}



