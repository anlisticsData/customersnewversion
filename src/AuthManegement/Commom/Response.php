<?php
namespace Analistics\Customers\Commom;

class Response{
    private $status=200;
    private $messagens=[];
    function __construct(){}
    public function json($status,$dataSend){
        header("HTTP/1.1 ".$status);
        header('Content-Type: application/json');
        $data=array(
            "status"=>$this->status,
            "data" =>$dataSend,
            "message"=>$this->messagens
        );
        echo json_encode($data);
        die;
    }
}




?>