<?php
namespace Analistics\Customers\Commom\Dtos;
use Analistics\Customers\Commom\Serializer;

class SensorTypeDto  extends  Serializer{
    public $id;
    public $description;
    public $type;
    public $observation;
    public $created_at;
    public function __construct(){
        parent::__construct($this);
    	return $this;
    }

   
}




?>