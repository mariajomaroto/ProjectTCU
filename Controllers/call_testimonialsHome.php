<?php
require_once("../Models/singUp.php");

$selecttestimonial = new SingUp();
  
$result = $selecttestimonial->readTestimonialsHome();

  
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/testimonialsHome.json";

file_put_contents($file, $json_string);