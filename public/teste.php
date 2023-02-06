<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use Analistics\Customers\Commom\Adapter\RedBeanPHPAdapter;
use Analistics\Customers\TokenManegement\Dtos\TokenDto;
use Analistics\Customers\TokenManegement\TokenDataBaseRepository;

require_once(__DIR__."./../vendor/autoload.php");

$TokenDataBaseRepository = new TokenDataBaseRepository(new RedBeanPHPAdapter());

echo "<pre>";
$tokenData1 = null;// $TokenDataBaseRepository->getAll();


$tokenData2 =null; $TokenDataBaseRepository->getBy(37);


$r="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhhZGRhNGRjMCJ9.jdSpcI6ALuW+3I7CUhc9gAbN1SVrNR2MZ2YJH2mzQig=";
$tokenData3 = $TokenDataBaseRepository->getByToken($r);

$t = $TokenDataBaseRepository->save(new TokenDto(null,"teste","AAAA",87,123));
print_r([$TokenDataBaseRepository,$tokenData1,$tokenData2,$tokenData3,$t] );


?>