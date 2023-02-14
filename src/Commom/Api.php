<?php

namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Dtos\ConfigItem;

class Api extends ApplicationBase{
    private $id;
    private $description;
    private $configs=array();

    public function __construct($id,$description)
    {
        $this->id =  $id;
        $this->description = $description;
        return $this;
    }

    public function append(ConfigItem $config){
        array_push($this->configs,$config);
        return $this;
    }

    public function get(){
      return $this->id;
    }

    public function getConfigByType($type){
        foreach($this->configs as $configIndex =>$config){
            if($config->type==$type) return $config->value;
        }    

        return null;
    }

}


?>