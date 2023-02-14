<?php

namespace Analistics\Customers\Commom\Dtos;

use Analistics\Customers\Commom\Contracts\MessageInterface;

class AlertMessage implements MessageInterface{
    public $hasError;
    public $messages;
    public $sessionType;
    
    public function __construct($messages,$hasError,$sessionType=0)
    {
        $this->messages =$messages;
        $this->hasError =$hasError;
        $this->sessionType =$sessionType;
        
    }
    
}


?>
