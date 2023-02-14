<?php
namespace Analistics\Customers\Commom\Repository;

interface TokenRepositoryInterface{
    public function  save($tokenDto);
    public function  getBy($id);
    public function  getAll($params=[]);
    public function  update($id,$tokenDto);
}


?>