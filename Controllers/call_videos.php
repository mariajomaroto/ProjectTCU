<?php
require_once("../Models/resources.php");

$call_videos = new Resources();
 
$result = $call_videos->view_videos();
// var_dump($result);
$json_string = json_encode($result);

echo $json_string;

$file = "../Views/js/json/videos.json";

file_put_contents($file, $json_string);