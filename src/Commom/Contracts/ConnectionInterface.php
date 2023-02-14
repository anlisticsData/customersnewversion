<?php 

namespace Analistics\Customers\Commom\Contracts;


interface ConnectionInterface{
    public function insert($sql,$params=[]);
    public function delete($id);
    public function update($sql,$params=[]);
    public function select($sql,$params=[]);
}





?>