<?php

namespace Analistics\Customers\Commom;

class ApiArrays extends ApplicationBase{
    private $apis=array();

    public function __construct()
    {
        return $this;
    }

    public function append(Api $api){
        array_push($this->apis,$api);
        return $this;
    }

    public function getAll(){
      return $this->apis;
    }

    public function getApiBy($id){
        foreach($this->apis as $apiIndex =>$api){
            if($api->get()==$id) return $api;
        }    
        return null;
    }

}


?>