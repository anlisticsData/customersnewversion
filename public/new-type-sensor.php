<?php


use Analistics\Customers\Commom\Dtos\SensorTypeDto;
use Analistics\Customers\TypeSensorManegement\TypeSensorDataBaseRepository;


//*salvar request e session Fazer
require_once(__DIR__."./../Application.php");
$erros=[];
$sensorTypeDto =  new SensorTypeDto();
try{
    if(!isset($request['description']) || strlen(trim($request['description']))==0){
        $erros[]=array("input-id"=>"description","error"=>"Nome do Tipo Inválido");
    }
    if(!isset($request['observation']) || strlen(trim($request['observation']))==0){
        $erros[]=array("input-id"=>"observation","error"=>"Observação do Tipo Inválido");
    }
    $sensorTypeDto->setModeles($request,['description','type','observation']); 
    if(count($erros) > 0){
        $session->flash("errors",$erros);
        $session->flash("classObject",$sensorTypeDto->serializer());
        $App->Redirect("../new-type-sensors");
    }
    
    $TypeSensorDataBaseRepository =  new TypeSensorDataBaseRepository($connection);
    if($TypeSensorDataBaseRepository->save($sensorTypeDto)){
        $App->Redirect("../type-sensors");
    }
}catch(Exception $e){ 
    $erros[]=array("error"=>"#Erro as Criar Tipo de Sensor.!");
    $erros[]=array("error"=>$e->getMessage());
    $session->flash("errors",$erros);
    $session->flash("classObject",( new SensorTypeDto())->serializer());
    $App->Redirect("../new-type-sensors");
}
?>