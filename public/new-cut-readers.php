<?php


//*salvar request e session Fazer

use Analistics\Customers\Commom\Dtos\CutSensorDto;
use Analistics\Customers\CutSensorManegement\CutSensorDataBaseRepository;

require_once(__DIR__."./../Application.php");
$erros=[];
$cutSensorDto =  new CutSensorDto();
 
try{
    if(!isset($request['typesensor']) || strlen(trim($request['typesensor']))==0){
        $erros[]=array("input-id"=>"typesensor","error"=>"Tipo Não Selecionado.!");
    }
    if(!isset($request['description']) || strlen(trim($request['description']))==0){
        $erros[]=array("input-id"=>"description","error"=>"Nome do Tipo Inválido");
    }
    if(!isset($request['observation']) || strlen(trim($request['observation']))==0){
        $erros[]=array("input-id"=>"observation","error"=>"Observação do Tipo Inválido");
    }
    $request['observation'] =str_replace(array("\"", "\'"), ' ', strip_tags($request['observation']));
    if(count($erros) > 0){
        print_r(["<pre>",$erros]);die;
        $session->flash("errors",$erros);
        $App->Redirect("../cut-readers");
    }
    $cutSensorDto->setModeles($request,['description','typesensor','observation']); 
    $cutSensorDataBaseRepository =  new CutSensorDataBaseRepository($connection);
    if($cutSensorDataBaseRepository->save($cutSensorDto)){
        $App->Redirect("../cut-readers");
    }




}catch(Exception $e){ 
    $erros[]=array("error"=>"#Erro as Criar Tipo de Sensor.!");
    $erros[]=array("error"=>$e->getMessage());
    $session->flash("errors",$erros);
    
    $App->Redirect("../new-cut-readers");
}
?>