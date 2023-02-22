<?php



class Serializer implements SerializerInterface{
	private $context=null;
	public function __construct($context){
		$this->context =$context;
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