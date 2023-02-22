<?php

namespace Analistics\Customers\Commom\Adapter;

use RedBeanPHP\R;
use Analistics\Customers\Commom\Contracts\ConnectionInterface;

//require_once(__DIR__."./../../../rb.php");

class RedBeanPHPAdapter implements ConnectionInterface{
    private $connection;

    public  function __construct()
    {
        if(!R::testConnection()){
          R::setup('mysql:host=localhost;dbname=anlcustomers','dev','@Dev1234');
        }
    }
    public function insert($sql,$params=[]){
        R::exec($sql,$params);
        return R::getInsertID();
    }
    public function delete($id){}
    public function update($sql,$params=[]){
        R::exec($sql,$params);
    }
    public function select($sql,$params=[]){
        if(is_null($params)){
            return R::getAll($sql);
        }else{
            return R::getAll($sql,$params);
        }
    }
}



?>