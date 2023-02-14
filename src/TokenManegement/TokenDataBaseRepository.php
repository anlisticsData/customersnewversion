<?php


namespace Analistics\Customers\TokenManegement;

use Analistics\Customers\Commom\Contracts\ConnectionInterface;
use Analistics\Customers\Commom\Repository\TokenRepositoryInterface;
use Analistics\Customers\TokenManegement\Dtos\TokenDto;

class TokenDataBaseRepository implements TokenRepositoryInterface{

    private $connection;

    public function __construct(ConnectionInterface $connection){
        $this->connection = $connection;
        
    }

    public function  getAll($params=[]){
        $tokenData = $this->connection->select("select *  from tokens",null);
        $tokens=[];
        foreach($tokenData as $index=>$token){
            array_push($tokens,new TokenDto($token['id'],$token['tipo'],$token['tokenlocal'],$token['limit'],$token['timestrtotime'],$token['created_at'],$token['update_at']));

        }
        return $tokens;
    }
    public function  getBy($id){
        $tokenData = $this->connection->select("select *  from tokens where id=? ",[$id]);
        if(count($tokenData) > 0){
            return new TokenDto($tokenData[0]['id'],$tokenData[0]['tipo'],$tokenData[0]['tokenlocal'],$tokenData[0]['limit'],$tokenData[0]['timestrtotime'],$tokenData[0]['created_at'],$tokenData[0]['update_at']);
        }
        return null;
    }
    public function  getByToken($token){
        $tokenData = $this->connection->select("select *  from tokens where tokenlocal=? ",[$token]);
        if(count($tokenData) > 0){
            return new TokenDto($tokenData[0]['id'],$tokenData[0]['tipo'],$tokenData[0]['tokenlocal'],$tokenData[0]['limit'],$tokenData[0]['timestrtotime'],$tokenData[0]['created_at'],$tokenData[0]['update_at']);
        }
        return null;
    }
    public function  save($tokenDto){
        $params =[];
        array_push($params,$tokenDto->tipo,$tokenDto->tokenlocal,$tokenDto->limit,$tokenDto->timestrtotime); 
        $tokenData = $this->connection->insert("insert into tokens (tipo, tokenlocal,`limit`, timestrtotime, created_at) values(?,?,?,?,now())",$params);
        return $this->getBy($tokenData);
    }
    public function  update($id,$tokenDto){}

    public function registerAccessToken($appId,$token,$limitInative){
        $params =[];
        array_push($params,$appId,$token,$limitInative,strtotime(date('Y/m/d H:m:s'))); 
        $tokenData =$this->connection->insert("insert into tokens (tipo, tokenlocal,`limit`, timestrtotime, created_at) values(?,?,?,?,now())",$params);
        return $this->getBy($tokenData);
       
    }

    public function closeSession($token){
        $params =[];
        array_push($params,999999999999,9999,strtotime(date('Y/m/d H:m:s')),$token); 
        $this->connection->update("update tokens set timestrtotime=?, `limit`=?,timestrtotime=? where tokenlocal=?",$params);
        return true;
       
    }

}
?>