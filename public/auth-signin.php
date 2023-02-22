<?php

use RedBeanPHP\R;
use Analistics\Customers\Commom\Message;
use Analistics\Customers\Commom\Dtos\AlertMessage;
use Analistics\Customers\Commom\Adapter\RedBeanPHPAdapter;
use Analistics\Customers\TokenManegement\TokenDataBaseRepository;
require_once(__DIR__."./../Application.php");
$request = $App->Request()->getAll();
try{
    if(isset($request['SERVER_SOFTWARE_AUTH'])){
        $TokenRepository = new TokenDataBaseRepository(new RedBeanPHPAdapter());
        $TokenRepository->closeSession($_SESSION['SERVER_SOFTWARE_AUTH']);
        session_destroy();
        $App->Redirect("../index");
    }
}catch(Exception $e){
    $App->logError($e->getMessage());
    if($App->hasErrors()){
        $dialog = new Message();
        $dialog->push(new AlertMessage($App->getErrors(),$App->hasErrors()));
        $App->Session()->flash("APLICATION_RESPONSE",$dialog);
        $App->Redirect("../index");
    }
}



