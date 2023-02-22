<?php

namespace Analistics\Customers\Commom;

use Exception;
use Analistics\Customers\Commom\Jwt;
use Analistics\Customers\Commom\Contracts\ApplicationInterface;

class Application implements ApplicationInterface{
   private  $errors=[];
   private  $request =null;
   private  $lib =null;
   private  $session =null;
   private  $apis =null;
   private  $jwt = null;
   private  $resources=[];

   

   public function __construct($request,$lib,$session,$apis=null,$resources=[])
   {

   
        $this->resources=$resources;
        $this->request = $request;
        $this->lib = $lib;
        $this->session = $session;
        $this->apis = $apis;
        $this->jwt = new Jwt("3218670456456das456d4as4das1xc1as891x89as9121231315648946sa55s5as4a1x15");
   }



  public function Auth($token=null){
     
  }



  public function getResources($type){
     return (isset($this->resources[$type])) ? $this->resources[$type] : null;
  }




  public function getLanguage($type){

    

    foreach($this->resources as $index=>$strValue){
        $resource =$strValue->stringResource($type);
        if($resource){
            return $resource;
        }
    }
     
 

  }

  

  public function Apis($codeApi=null){
    return  (!is_null($codeApi)) ? $this->apis->getApiBy($codeApi):$this->apis;
  }



   public function Redirect($pager){
     header("location:".$pager);die;
   }


  public function getJwt(){
    return $this->jwt;
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