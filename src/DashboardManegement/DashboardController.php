<?php

namespace Analistics\Customers\DashboardManegement;

class DashboardController{
    private $session = null;


    function __construct($sessionSerializedActive)
    {
        $this->session =(array)unserialize($sessionSerializedActive);
    }


     

}




?>