<?php

namespace Analistics\Customers\CutSensorManegement;

use Exception;
use Analistics\Customers\Commom\Pagination;
use Analistics\Customers\Commom\Dtos\CutSensorDto;
use Analistics\Customers\Commom\Contracts\ConnectionInterface;
use Analistics\Customers\Commom\Repository\CutSensorRepositoryInterface;

class CutSensorDataBaseRepository implements CutSensorRepositoryInterface {
    private $connection;
    private $paginatorClassLinks=null;
    public function __construct(ConnectionInterface $connection){
        $this->connection = $connection;
    }
    public function getLinksPaginator(){
        return $this->paginatorClassLinks;
    }
    public function  save($typeSensorDto){
        $params =[];
       // if($this->getByDescription($typeSensorDto->description)) throw new Exception('#Sensor já Cadastrado');
        array_push($params,$typeSensorDto->description,$typeSensorDto->typesensor,$typeSensorDto->observation); 
        $typeSensorData = $this->connection->insert("insert into cut_readers (description, `type`, observation, created_at) values(?,?,?,now())",$params);
        return $this->getBy($typeSensorData);
    }

    public function  delete($id){
        $params =[];
        array_push($params,$id); 
        $typeSensorData = $this->connection->delete("update cut_readers set deleted_at=now() where   id=?",$params);
        return $typeSensorData ;
    }
    public function  getBy($id){
        $typeSensorData = $this->connection->select("select id, description, `type`, observation, created_at  from cut_readers where deleted_at is  null and id=? ",[$id]);
        if(count($typeSensorData) > 0){
            $sensorType =new CutSensorDto();
            $sensorType->id=$typeSensorData[0]['id'];
            $sensorType->description=$typeSensorData[0]['description'];
            $sensorType->typesensor=$typeSensorData[0]['type'];
            $sensorType->observation=$typeSensorData[0]['observation'];
            $sensorType->created_at=$typeSensorData[0]['created_at'];
            return  $sensorType;
        }
        return null;
    }
    public function  getByDescription($description){
        $typeSensorData = $this->connection->select("select id, description, `type`, observation, created_at  from cut_readers where deleted_at is  null and trim(description)=? ",[trim($description)]);
        if(count($typeSensorData) > 0){
            $sensorType =new CutSensorDto();
            $sensorType->id=$typeSensorData[0]['id'];
            $sensorType->description=$typeSensorData[0]['description'];
            $sensorType->typesensor=$typeSensorData[0]['type'];
            $sensorType->observation=$typeSensorData[0]['observation'];
            $sensorType->created_at=$typeSensorData[0]['created_at'];
            return  $sensorType;
        }
        return null;

    }
    public function  getAllPagination($params=[]){
        $typeSensorDataCount = $this->connection->select("select count(*) as `total`   from cut_readers",null);
        $paginatorClass =  new Pagination((isset($typeSensorDataCount[0]['total']) ? $typeSensorDataCount[0]['total']:0 ),$params['pager'],3,2);
        $this->paginatorClassLinks = $paginatorClass->links();
        $params_=array($this->paginatorClassLinks['initial'],$this->paginatorClassLinks['end']);
        $tokenData = $this->connection->select("select id, description, `type`, observation, created_at  from cut_readers  limit ?,?",$params_);
        $typeSensors=[];
        foreach($tokenData as $index=>$typeSensorData){
            $sensorType =new CutSensorDto();
            $sensorType->id=$typeSensorData['id'];
            $sensorType->description=$typeSensorData['description'];
            $sensorType->typesensor=$typeSensorData['type'];
            $sensorType->observation=$typeSensorData['observation'];
            $sensorType->created_at=$typeSensorData['created_at'];
            array_push($typeSensors,$sensorType);
            unset( $sensorType );
        }
        return $typeSensors;
    }

    public function  getAll($params=[]){
        $tokenData = $this->connection->select("select id, description, `type`, observation, created_at  from cut_readers where deleted_at is  null",null);
        $typeSensors=[];
       
        foreach($tokenData as $index=>$typeSensorData){
            $sensorType =new CutSensorDto();
            $sensorType->id=$typeSensorData['id'];
            $sensorType->description=$typeSensorData['description'];
            $sensorType->typesensor=$typeSensorData['type'];
            $sensorType->observation=$typeSensorData['observation'];
            $sensorType->created_at=$typeSensorData['created_at'];
            array_push($typeSensors,$sensorType);
            unset( $sensorType );
        }
        return $typeSensors;
    }

    public function  update($id,$typeSensor){
        $params =[];
        array_push($params,$typeSensor->description,$typeSensor->observation,$id); 
        $typeSensorData = $this->connection->update("update cut_readers set description=?, observation=? where deleted_at is  null and id=? ",$params);
        return $typeSensorData;

    }
    

}



?>