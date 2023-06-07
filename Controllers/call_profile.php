<?php
require_once("../Models/singUp.php");


$profile = new SingUp();
if(isset($_REQUEST["email"])){
    $profile->set_p_email($_REQUEST['email']);
    $profile->set_p_password($_REQUEST['password']);

    $result = $profile -> call_profile();
    var_dump($result);
    $data = array(
    "FOTO_PERFIL" => $result["FOTO_PERFIL"], 
    "NOMBRE" => $result["NOMBRE"], 
    "APPELLIDOS" => $result["APPELLIDOS"],
    "FECH_NACIMIENTO" => $result["FECH_NACIMIENTO"],
    "GENERO" => $result["GENERO"], 
    "EMAIL" => $result["EMAIL"],
    "TELEFONO" => $result["TELEFONO"], 
    "PASSWORD_PERSONA" => $result["PASSWORD_PERSONA"]
    );
    $json_string = json_encode($data);
    echo $json_string;
    $file_name = '../Views/js/json/data_profile.json';
    file_put_contents($file_name, $json_string);
}