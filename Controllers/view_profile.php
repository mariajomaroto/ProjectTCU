<?php
require_once("../Models/singUp.php");

$call_profile = new SingUp();
// echo $_REQUEST['id_profile'];
echo "estoy aqui";
if(isset($_REQUEST['id_profile'])){
    $call_profile -> set_person_registration_id($_REQUEST["id_profile"]);

    
    $result = $call_profile->call_data_profile();

 
    $json_string = json_encode($result);
    
    echo $json_string;
    
    $file = "../Views/js/json/data_profile.json";
    
    file_put_contents($file, $json_string);
}else{
    echo "error al esperar los datos";
}