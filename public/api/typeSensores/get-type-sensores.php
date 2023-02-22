<?php

<<<<<<< HEAD
 
require_once(__DIR__."./../../../Application.php");
 

$data = array("types"=>$App->Request()->getAll());
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
=======
use Analistics\Customers\AuthManegement\AuthApiController;
 
require_once("../../../vendor/autoload.php");
new AuthApiController();
>>>>>>> 3499d656ba2a8ae9ac78c7c80cb16b8178f77230



?>