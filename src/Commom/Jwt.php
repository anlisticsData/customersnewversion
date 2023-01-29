<?php 
namespace Analistics\Customers\Commom;

class Jwt{
    private $secretKey;
    public function __construct($secretKey)
    {
        $this->secretKey=$secretKey;
    }

    public function generateToken($data=[]){
        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
         ];
         $header = json_encode($header);
         $header = base64_encode($header);
       
         $payload = [
            'iss' => 'localhost',
            'server'=>$_SERVER['DOCUMENT_ROOT'],
            'ip'=>$_SERVER['REMOTE_ADDR'],
         ];
         foreach($data as $index=>$valor){
            $payload[$index]=$valor;
         }
         
         $payload = json_encode($payload);
         $payload = base64_encode($payload);
        
         $signature = hash_hmac('sha256',"$header.$payload",$this->secretKey,true);
         $signature = base64_encode($signature);
         return  "$header.$payload.$signature";


    }

    public function validarToken($token){
            $payload=$this->getPlayloadToken($token);
            
            if($payload['signature'] == $payload['valid']){
                return 1;
            } else {
                return -1;
            }
    }


    public function getPlayloadToken($token,$inBase64=true){
        $part = explode(".",$token);
        $header =($inBase64) ? $part[0]:base64_decode($part[0]) ;
        $payload =($inBase64) ? $part[1]:base64_decode($part[1]) ;  
        $signature = $part[2];

        $valid = hash_hmac('sha256',"$header.$payload",$this->secretKey,true);
        $valid = base64_encode($valid);
        return array("header"=>$header,"payload"=>$payload,"signature"=>$signature,"valid"=>$valid);
    }

    
}

 





?>