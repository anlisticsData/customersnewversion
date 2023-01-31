<?php

namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Contracts\ApplicationInterface;

class Application implements ApplicationInterface{
   private  $errors=[];
   private  $request =null;
   private  $lib =null;
   private  $http =null;

   


   public function Redirect($pager){
     header("location:".$pager);die;
   }


   public function __construct($request,$lib)
   {
        $this->request = $request;
        $this->lib = $lib;
        
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

   public function Functions(){
     return $this->lib;
   }



}
?>