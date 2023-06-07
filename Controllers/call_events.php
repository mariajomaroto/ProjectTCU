<?php
require_once("../Models/singUp.php");

$selectEvents = new SingUp();
  
$result = $selectEvents->readEvents();

  
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/AllEvents.json";

file_put_contents($file, $json_string);

