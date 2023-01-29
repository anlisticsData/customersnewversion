<?php

namespace Analistics\Customers\Commom;

class ContentValues{
    private $values = [
        
    ];


    public function put($typeKey,$value){
        $this->values[$typeKey] = $value;
    }

    public function get($typeKey){
        if(isset($this->values[$typeKey])){
            return $this->values[$typeKey];
        }
        return null;
    }
    public function remove($typeKey){
        if(isset($this->values[$typeKey])){
            unset($this->values[$typeKey]);
        }
        return false;
    }

    public function getAll(){
        if(count($this->values)!=0){
            return $this->values;
        }
        return null;
    }
    

    public function clear(){
        $this->values = [];
        
    }
}


?>