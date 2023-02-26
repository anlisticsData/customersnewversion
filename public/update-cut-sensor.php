<?php


use Analistics\Customers\Commom\Dtos\CutSensorDto;
use Analistics\Customers\CutSensorManegement\CutSensorDataBaseRepository;


//*salvar request e session Fazer
require_once(__DIR__."./../Application.php");
$erros=[];
$sensorCutDto =  new CutSensorDto();
try{
    if(!isset($request['uuid']) || strlen(trim($request['uuid']))==0){
        $erros[]=array("error"=>"Codigo  do Tipo Inválido");
    }

    if(!isset($request['description']) || strlen(trim($request['description']))==0){
        $erros[]=array("input-id"=>"description","error"=>"Nome do Tipo Inválido");
    }
    if(!isset($request['observation']) || strlen(trim($request['observation']))==0){
        $erros[]=array("input-id"=>"observation","error"=>"Observação do Tipo Inválido");
    }
    $request['observation'] =str_replace(array("\"", "\'"), ' ', strip_tags($request['observation']));
    $sensorCutDto->setModeles($request,['description','type','observation']); 
    if(count($erros) > 0){
        $session->flash("errors",$erros);
        $session->flash("classObject",$sensorCutDto->serializer());
        $App->Redirect("../cut-readers");
    }
    
    $CutSensorDataBaseRepository =  new CutSensorDataBaseRepository($connection);
    $message=[];
    if($CutSensorDataBaseRepository->update($request['uuid'],$sensorCutDto)){
        $message[]=array("error"=>"Alterado com Sucesso..!");
        $session->flash("errors",$message);
        $App->Redirect("../cut-readers");
    }else{
        $message[]=array("error"=>"#Error ao Alterado com Tipo de Sensor..!");
        $session->flash("errors",$message);
        $App->Redirect("../cut-readers");
    }
}catch(Exception $e){ 
    $erros[]=array("error"=>"#Erro as Criar Tipo de Sensor.!");
    $erros[]=array("error"=>$e->getMessage());
    $session->flash("errors",$erros);
    $session->flash("classObject",( new CutSensorDto())->serializer());
    $App->Redirect("../cut-readers");
}
?>