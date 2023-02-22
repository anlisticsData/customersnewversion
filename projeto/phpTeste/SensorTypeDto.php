<?php



class SensorTypeDto extends Serializer{
    public $description;
    public $type;
    public $observation;
    public $createdAt;
    public function __construct(){
        parent::__construct($this);
    	return $this;
    }
}

 
?>