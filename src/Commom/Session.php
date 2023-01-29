<?php
namespace Analistics\Customers\Commom;
class Session{
    private $_SESSION = null;

    function __construct()
    {
        session_start();
        session_regenerate_id();
    }
    public function add($type,$value){
        $_SESSION[$type]=$value;
       
    }

    public function delete($type){

        if(isset($SESSION[$type])){
            unset($_SESSION[$type]);
            return true;
        }
        return false;
      
    }
    public function destroy(){
        unset($_SERVER);
        session_destroy();
    }

    public function get($type){
       
        if(isset($_SESSION[$type])){
            
            return $_SESSION[$type];
        }
        return null;
      
    }



}

?>