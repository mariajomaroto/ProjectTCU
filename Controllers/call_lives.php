<?php
require_once("../Models/resources.php");

$call_lives = new Resources();
 
$result = $call_lives->view_liveVideos();
// var_dump($result);
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/lives.json";

file_put_contents($file, $json_string);