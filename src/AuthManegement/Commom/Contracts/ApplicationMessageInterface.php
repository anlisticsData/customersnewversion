<?php
namespace Analistics\Customers\Commom\Contracts;

interface ApplicationMessageInterface{
    public function push($menssageDto);
    public function pop();
   
}


?>