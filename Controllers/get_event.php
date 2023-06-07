<?php
require_once("../Models/singUp.php");

$selectEvent = new SingUp();

$selectEvent -> set_id_event($_REQUEST["id"]);
  
$result = $selectEvent->getEvent();
 
$json_string = json_encode($result);

echo $json_string;
 
$file = "../Views/js/json/Event.json";

file_put_contents($file, $json_string);