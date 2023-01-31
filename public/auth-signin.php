<?php

use RedBeanPHP\R;
require_once(__DIR__."./../Application.php");
$request = $App->Request()->getAll();
try{
    if(isset($request['SERVER_SOFTWARE_AUTH'])){
        $token = R::findOne('tokens',' tokenlocal = ? ',array( $_SESSION['SERVER_SOFTWARE_AUTH']));
        $token->timestrtotime =999999999999;
        $token->update_at = R::isoDateTime();
        $token->limit=9999;
        R::store( $token );
        session_destroy();
        $App->Redirect("../index");
    }
   
}catch(Exception $e){
    $App->logError($e->getMessage());
    if($App->hasErrors()){
        $_SESSION["APLICATION_RESPONSE"]=array(
            "hasError" => $App->hasErrors(),
            "messagens" => $App->getErrors(),
            "sessionType" => 0
        );
        $App->Redirect("../index");
    }
}



