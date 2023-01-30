<?php

namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Contracts\ApplicationInterface;

class Application implements ApplicationInterface{
   private  $errors=[];
   private  $request =null;


   public function __construct($request)
   {
        $this->request = $request;
   }

   public function Request(){
    return $this->request;
   }


   public function logError($error){
    $this->errors[]=$error;
   }

   public function hasErrors(){
        return (count($this->errors) > 0 ) ? true : false;
   }

   public function getErrors(){
    return $this->errors;
   }



}
?>