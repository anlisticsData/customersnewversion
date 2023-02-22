<?php

namespace Analistics\Customers\Commom\Dtos;
class ConfigItem{
    public $type;
    public $value;

    public function __construct($type,$value)
    {
        $this->type = $type;
        $this->value = $value;
    }
}



?>