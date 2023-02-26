<?php
namespace Analistics\Customers\Commom\Dtos;
use Analistics\Customers\Commom\Serializer;

class CutSensorDto  extends  Serializer{
    public $id;
    public $description;
    public $typesensor;
    public $observation;
    public $created_at;
    public function __construct(){
        parent::__construct($this);
    	return $this;
    }

   
}




?>