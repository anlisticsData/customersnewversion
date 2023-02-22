<?php
namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Contracts\HttpInterface;
class HttpRequest implements HttpInterface{
    private $buffer=[];
    private $_PATCH=[];
    private $_HEADERS=[];
    
    
   function __construct(){
        parse_str(file_get_contents('php://input'), $this->_PATCH);
        $this->getRequestHeaders();
        $this->execute();
        return $this;
    }
    private function execute(){
        foreach($_GET as $index=>$item){
            $this->buffer[$index]=$item;
        }
        foreach($_POST as $index=>$item){
            $this->buffer[$index]=$item;
        }
        if(isset($_SESSION)){
            foreach($_SESSION as $index=>$item){
                $this->buffer[$index]=$item;
            }
        }
      


        foreach($_FILES as $index=>$item){
            $this->buffer[$index]=$item;
        }
        foreach($this->_PATCH as $index=>$item){
            $this->buffer[$index]=$item;
        }
        foreach($this->_HEADERS as $index=>$item){
            $this->buffer[$index]=$item;
        }

        foreach($_SERVER as $index=>$item){
            $this->buffer[$index]=$item;
        }
    }
    private function getRequestHeaders() {
        $headers = array();
        foreach($_SERVER as $key => $value) {
            if (substr($key, 0, 5) <> 'HTTP_') {
                continue;
            }
            $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
            $headers[$header] = $value;
        }
        foreach(getallheaders() as $key => $value) {
            if(!isset($headers[$key])){
                $headers[$key] = $value;
            }
        
        }
       $this->_HEADERS=$headers;
    }
    public function add($indexName,$value){
        foreach($this->buffer  as $index=>$item){
            if($indexName==$index){
                $this->buffer[$index]=$value;
                return true;
            }
        }
        $this->buffer[$indexName]=$value;
        return  true;
      
    }
    public function getBy($indexName){
        foreach($this->buffer as $index=>$item){
            if($indexName==$index){
                return $item;
            }
        }

        return null;
    }

    public function getAll(){
        return $this->buffer;
    }



}




?>