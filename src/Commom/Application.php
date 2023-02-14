<?php

namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Contracts\ApplicationInterface;

class Application implements ApplicationInterface{
   private  $errors=[];
   private  $request =null;
   private  $lib =null;
   private  $session =null;
   private  $apis =null;
   

   

   public function __construct($request,$lib,$session,$apis=null)
   {
        $this->request = $request;
        $this->lib = $lib;
        $this->session = $session;
        $this->apis = $apis;
   }



  public function Auth($token=null){
     
  }



  public function Apis($codeApi=null){
    return  (!is_null($codeApi)) ? $this->apis->getApiBy($codeApi):$this->apis;
  }



   public function Redirect($pager){
     header("location:".$pager);die;
   }


 


   public function Session(){
    return $this->session;
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