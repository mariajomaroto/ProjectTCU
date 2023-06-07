<?php
require_once("../Models/singUp.php");

$selecttesti = new SingUp();
  
$result = $selecttesti->readTestimonials();

 
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/testimonials.json";

file_put_contents($file, $json_string);