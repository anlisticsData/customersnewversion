<?php

namespace Analistics\Customers\TypeSensorManegement;

use Exception;
use Analistics\Customers\Commom\Dtos\SensorTypeDto;
use Analistics\Customers\Commom\Contracts\ConnectionInterface;
use Analistics\Customers\Commom\Repository\TypeSensorRepositoryInterface;

class TypeSensorDataBaseRepository implements TypeSensorRepositoryInterface {
    private $connection;
    public function __construct(ConnectionInterface $connection){
        $this->connection = $connection;
        
    }


    public function  save($typeSensorDto){
        $params =[];
        if($this->getByDescription($typeSensorDto->description)) throw new Exception('#Tipo de Sensor já Cadastrado');
        
        array_push($params,$typeSensorDto->description,$typeSensorDto->type,$typeSensorDto->observation); 
        $typeSensorData = $this->connection->insert("insert into type_sensors (description, `type`, observation, created_at) values(?,?,?,now())",$params);
        return $this->getBy($typeSensorData);
    }
    public function  getBy($id){
        $typeSensorData = $this->connection->select("select id, description, `type`, observation, created_at  from type_sensors where id=? ",[$id]);
        if(count($typeSensorData) > 0){
            $sensorType =new SensorTypeDto();
            $sensorType->id=$typeSensorData[0]['id'];
            $sensorType->description=$typeSensorData[0]['description'];
            $sensorType->type=$typeSensorData[0]['type'];
            $sensorType->observation=$typeSensorData[0]['observation'];
            $sensorType->created_at=$typeSensorData[0]['created_at'];
            return  $sensorType;
        }
        return null;
    }
    public function  getByDescription($description){
        $typeSensorData = $this->connection->select("select id, description, `type`, observation, created_at  from type_sensors where trim(description)=? ",[trim($description)]);
        if(count($typeSensorData) > 0){
            $sensorType =new SensorTypeDto();
            $sensorType->id=$typeSensorData[0]['id'];
            $sensorType->description=$typeSensorData[0]['description'];
            $sensorType->type=$typeSensorData[0]['type'];
            $sensorType->observation=$typeSensorData[0]['observation'];
            $sensorType->created_at=$typeSensorData[0]['created_at'];
            return  $sensorType;
        }
        return null;

    }
    public function  getAll($params=[]){
        $tokenData = $this->connection->select("select id, description, `type`, observation, created_at  from type_sensors",null);
        $typeSensors=[];
       
        foreach($tokenData as $index=>$typeSensorData){
            $sensorType =new SensorTypeDto();
            $sensorType->id=$typeSensorData['id'];
            $sensorType->description=$typeSensorData['description'];
            $sensorType->type=$typeSensorData['type'];
            $sensorType->observation=$typeSensorData['observation'];
            $sensorType->created_at=$typeSensorData['created_at'];
            array_push($typeSensors,$sensorType);
            unset( $sensorType );
        }
        return $typeSensors;
    }
    public function  update($id,$typeSensor){}
    

}



?>