<?php


namespace Analistics\Customers\Commom\Resources;


use Analistics\Customers\Commom\ApplicationBase;
use Exception;

class  LanguageValues extends ApplicationBase{

    private $strings=array();

    public function __construct()
    {
           
           array_push( $this->strings,$this->createdStringResource("LOGOUT","Logout"));
           array_push( $this->strings,$this->createdStringResource("SETTINGS","Settings"));
           array_push( $this->strings,$this->createdStringResource("PROFILE","View Profile"));

    }



    private function createdStringResource($define,$value){
        foreach($this->strings as $indexString){
            if($indexString==$define){
                throw new Exception("Resorce já Adicionado.",500);
            }
        }
        return array("define"=>$define,"value"=>$value);
    }




    public function stringResource($type){
        foreach($this->strings as $indexString => $valueResource){
            if($valueResource['define']==$type){
                return $this->strings[$indexString];
            }
        }
        
        throw new Exception("Resorce Não Localizado.",500);
    }





}





?>