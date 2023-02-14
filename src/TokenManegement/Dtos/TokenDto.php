<?php

namespace Analistics\Customers\TokenManegement\Dtos;

class TokenDto{
   public $id;
   public $tipo;
   public $tokenlocal;
   public $limit;
   public $timestrtotime;
   public $created_at;
   public $update_at;

   public function __construct($id,$tipo,$tokenlocal,$limit,$timestrtotime,$created_at=null,$update_at=null){
        $this->id=$id;
        $this->tipo=$tipo;
        $this->tokenlocal=$tokenlocal;
        $this->limit=$limit;
        $this->timestrtotime=$timestrtotime;
        $this->created_at=$created_at;
        $this->update_at=$update_at;
   }


}



?>