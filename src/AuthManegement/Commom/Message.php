<?php
namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Contracts\ApplicationMessageInterface;


class Message implements ApplicationMessageInterface{
    private $stack=[];
    public function push( $menssageDto){
        array_push($this->stack,$menssageDto);
    }
    public function pop(){
        return array_pop($this->stack);    
    }
    public function size(){
        return count($this->stack);    
    }
    
    
}


?>