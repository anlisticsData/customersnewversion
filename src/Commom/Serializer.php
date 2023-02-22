<?php

namespace Analistics\Customers\Commom;
use Analistics\Customers\Commom\Contracts\SerializerInterface;
class Serializer implements SerializerInterface{
	private $context=null;
	public function __construct($context){
		$this->context =$context;
	}


	public function setModeles($vars,$filterVars=null){
        $attributsClass=array_keys(get_class_vars(get_class($this->context)));
        foreach($attributsClass as $indexAttributs=>$valueClass){
            if(in_array($valueClass,$filterVars) && in_array($valueClass,array_keys($vars))){
                $this->$valueClass = $vars[$valueClass];
            }
        }
    }

	
    function serializer(){
    	return base64_encode(serialize($this->context));
    }
    function deserializer($thisObjectSerializer){
      	$attributsClass=array_keys(get_class_vars(get_class($this->context)));
      	$deserializerClass = unserialize(base64_decode($thisObjectSerializer));
	    foreach ($attributsClass as $indexClassVar => $valueKey) {
	    	if(isset($deserializerClass->$valueKey)){
				$this->context->$valueKey=$deserializerClass->$valueKey;
				
	    	}
	  	}
	  	return $this->context;
    }
}

 
?>