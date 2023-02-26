<?php


use Analistics\Customers\Commom\Dtos\SensorTypeDto;
use Analistics\Customers\CutSensorManegement\CutSensorDataBaseRepository;
 


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
        $App->Redirect("../cut-readers");
    }
    
    $cutSensorDataBaseRepository =  new CutSensorDataBaseRepository($connection);
    if($cutSensorDataBaseRepository->delete($request['uuid'])){
        $App->Redirect("../cut-readers");
    }
}catch(Exception $e){ 
    $erros[]=array("error"=>"#Erro as Criar Tipo de Sensor.!");
    $erros[]=array("error"=>$e->getMessage());
    $session->flash("errors",$erros);
    $session->flash("classObject",( new SensorTypeDto())->serializer());
    $App->Redirect("../new-cut-readers");
}
?>