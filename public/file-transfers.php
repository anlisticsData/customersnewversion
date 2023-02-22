<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//mkdir(dirname(__FILE__).'/arquivos/nome_da_pasta/', 0777, true);
mkdir(dirname(__FILE__).'../arquivos/nome_da_pasta/', 0777, true);


echo "<pre>";
print_r([$_FILES,$_POST]);



?>