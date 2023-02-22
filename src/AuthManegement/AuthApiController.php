<?php

namespace Analistics\Customers\AuthManegement;

use Analistics\Customers\Commom\Response;
use Analistics\Customers\Commom\HttpRequest;
use Analistics\Customers\Commom\ApplicationBase;
use Analistics\Customers\Commom\Adapter\RedBeanPHPAdapter;
use Analistics\Customers\TokenManegement\TokenDataBaseRepository;

class AuthApiController extends ApplicationBase{
    private $HttpRequest;
    private $TokenModel;
    public function __construct()
   
    {
        $this->TokenModel  =new TokenDataBaseRepository(new RedBeanPHPAdapter());
        $this->HttpRequest = new HttpRequest();
        if(is_null($this->TokenModel->getByToken($this->HttpRequest->getBy('Authorization_')))){
            (new Response())->json(401,null);
        }

        $this->TokenModel->validateToken($this->HttpRequest->getBy('Authorization_'));

    }
}


?>