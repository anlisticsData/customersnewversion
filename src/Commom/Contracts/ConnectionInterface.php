<?php 

namespace Analistics\Customers\Commom\Contracts;


interface ConnectionInterface{
    public function insert($sql,$params=[]);
    public function delete($sql,$params=[]);
    public function update($sql,$params=[]);
    public function select($sql,$params=[]);
}





?>