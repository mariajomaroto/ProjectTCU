<?php
require_once("../Models/singUp.php");

$selectConsul = new SingUp();
  
$result = $selectConsul->readConsul();

 
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/consul.json";

file_put_contents($file, $json_string);