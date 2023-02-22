<?php


use Analistics\Customers\Commom\Message;
use Analistics\Customers\Commom\Dtos\AlertMessage;
use Analistics\Customers\Commom\Adapter\RedBeanPHPAdapter;
use Analistics\Customers\Commom\Controller\ApisController;
use Analistics\Customers\TokenManegement\TokenDataBaseRepository;
require_once(__DIR__."./../Application.php");
$request = $App->Request()->getAll();
try{
  
    if(!isset($request['email']) || strlen(trim($request['email']))=== 0 ){
        $App->logError("Endereço de Email inválidos..!");
    }
    if(!isset($request['password']) || strlen(trim($request['password']))=== 0 ){
        $App->logError("Senha da Conta  inválidas..!");
    }

    $errors=$App->getErrors();
    if(!isset($request['SERVER_SOFTWARE_AUTH']) && count($errors)==0){
        $TokenRepository = new TokenDataBaseRepository(new RedBeanPHPAdapter());
        $request['SERVER_SOFTWARE_AUTH']=$App->getJwt()->generateToken(array("name"=>APP_ID,"uuid"=>uniqid()));
        $TokenData = $TokenRepository->registerAccessToken(APP_ID, $request['SERVER_SOFTWARE_AUTH'],APP_LIMIT_INATIVO_TOKEN);
        if($TokenData){
            $_SESSION['SERVER_SOFTWARE_AUTH']=$request['SERVER_SOFTWARE_AUTH'];
        }
     }
    $ApisController = new ApisController($App->Apis());
    $out=$ApisController->loginInAnaliticsData($request["email"],$request['password'],API_ANALISTICS);

    
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