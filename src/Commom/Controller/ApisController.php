<?php

namespace Analistics\Customers\Commom\Controller;

use PlugAnalistics\EndPointsServices;
use Analistics\Customers\Commom\ApiArrays;
use PlugAnalistics\AnaliticsDataIntegrationApi;
use Analistics\Customers\Commom\ApplicationBase;


class ApisController extends ApplicationBase{
    private $apis=[];


    public function __construct($apis)
    {
        $this->apis=$apis;
    }


    public function loginInAnaliticsData($email,$password,$codeApi){
        $ApiAnl = $this->apis->getApiBy($codeApi);
        $APIAnalistics  =   new AnaliticsDataIntegrationApi(new EndPointsServices(),
                            $ApiAnl->getConfigByType("password"),
                            $ApiAnl->getConfigByType("url")
                        );
        $APIAnalistics->loginIn($email,$password);
        return $APIAnalistics->activeUser();
    }


    
}




?>