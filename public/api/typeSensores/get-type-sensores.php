<?php

 
require_once(__DIR__."./../../../Application.php");
 

$data = array("types"=>$App->Request()->getAll());
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);



?>