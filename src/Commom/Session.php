<?php
namespace Analistics\Customers\Commom;
class Session{
    private $_SESSION = null;

    function __construct()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        session_regenerate_id();
    }
    public function add($type,$value){
        $_SESSION[$type]=$value;
       
    }

    public function flash($type,$value){
        $_SESSION[$type]=array("sessionType"=>"flash-session","value"=>$value);
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

    public function get($type,$clear=false){
        if(isset($_SESSION[$type])){
            if(isset($_SESSION[$type]['sessionType']) && $_SESSION[$type]['sessionType']=='flash-session'){
                $value=$_SESSION[$type];
                if($clear){
                    $this->delete($type);
                }
                return $value;
            }
            return $_SESSION[$type];
        }
        return null;
      
    }





}

?>