<?php
require_once("../Models/singUp.php");

$selectimage = new SingUp();
 
$result = $selectimage->readimagesTown();

$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/imagesTown.json";

file_put_contents($file, $json_string);