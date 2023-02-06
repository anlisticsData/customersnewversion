<?php

use RedBeanPHP\R;
use PlugAnalistics\EndPointsServices;
use Analistics\Customers\Commom\Message;
use PlugAnalistics\AnaliticsDataIntegrationApi;
use Analistics\Customers\Commom\Dtos\AlertMessage;
require_once(__DIR__."./../Application.php");
$request = $App->Request()->getAll();


try{
        
    if(!isset($request['email']) || strlen(trim($request['email']))=== 0 ){
        $App->logError("Endereço de Email inválidos..!");
    }
    if(!isset($request['password']) || strlen(trim($request['password']))=== 0 ){
        $App->logError("Senha da Conta  inválidas..!");
    }
   
    if(!isset($request['SERVER_SOFTWARE_AUTH']) && count($errors)==0){
        $request['SERVER_SOFTWARE_AUTH']=$Jwt->generateToken(array("name"=>APP_ID,"uuid"=>uniqid()));
        $token = R::dispense( 'tokens' );
        $token->tipo=APP_ID;
        $token->tokenlocal =$request['SERVER_SOFTWARE_AUTH'];
        $token->limit =APP_LIMIT_INATIVO_TOKEN;
        $token->timestrtotime =strtotime(date('Y/m/d H:m:s'));
        $token->created_at = R::isoDateTime();
        if(R::store( $token )){
            $_SESSION['SERVER_SOFTWARE_AUTH']=$request['SERVER_SOFTWARE_AUTH'];
        }
    }
    $APIAnalistics  =   new AnaliticsDataIntegrationApi(new EndPointsServices(),"123456789","http://localhost/smdataanlystic/public");
    $APIAnalistics->loginIn($request["email"],$request['password']);
    $out = $APIAnalistics->activeUser();
    if(strlen(trim($out->api->jwt)) > 0){
         $App->Session()->add('API_ANALISTICS_USER',serialize($out));
         $App->Session()->add('API_ANALISTICS_JWT',$out->api->jwt);
        $App->Redirect("../painel");
    }else{
        $App->logError("Email Ou  Senha  inválidos..!");
    }
    throw new Exception("#Error ao Tentar Logar Na Api (Analistics.)",401);
}catch(Exception $e){
  
    $App->logError($e->getMessage());
    if($App->hasErrors()){
        $dialog = new Message();
        $dialog->push(new AlertMessage($App->getErrors(),$App->hasErrors()));
        $App->Session()->flash("APLICATION_RESPONSE",$dialog);
        $App->Redirect("../index");
     }

}





?>