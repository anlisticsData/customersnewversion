<?php
namespace Analistics\Customers\Commom\Repository;

interface TypeSensorRepositoryInterface{
    public function  save($typeSensorDto);
    public function  getBy($id);
    public function  getAll($params=[]);
    public function  update($id,$typeSensor);
}


?>