<?php


use Analistics\Customers\Commom\Dtos\SensorTypeDto;
use Analistics\Customers\TypeSensorManegement\TypeSensorDataBaseRepository;


//*salvar request e session Fazer
require_once(__DIR__."./../Application.php");
$erros=[];
$sensorTypeDto =  new SensorTypeDto();

try{
    if(!isset($request['uuid']) || strlen(trim($request['uuid']))==0){
        $erros[]=array("error"=>"Codigo do Tipo de Sensor inválido.");
    }
   
    if(count($erros) > 0){
        $session->flash("errors",$erros);
        $App->Redirect("../type-sensors");
    }
    
    $TypeSensorDataBaseRepository =  new TypeSensorDataBaseRepository($connection);
    if($TypeSensorDataBaseRepository->delete($request['uuid'])){
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