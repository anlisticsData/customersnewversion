<?php
namespace Analistics\Customers\Commom\Repository;

interface CutSensorRepositoryInterface{
    public function  save($typeSensorDto);
    public function  getBy($id);
    public function  getAll($params=[]);
    public function  update($id,$typeSensor);
    public function  delete($id);
}


?>