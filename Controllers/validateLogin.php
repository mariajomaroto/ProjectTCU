<?php

session_start();

require_once("../Models/singUp.php");

$select = new SingUp();
 
if(isset($_REQUEST['txt_email'])){
    $select -> set_gmail($_REQUEST["txt_email"]);
    $select -> set_password($_REQUEST["txt_pass"]);
  
    $result=$select->read();
    
    // echo $_SESSION['ID_REGISTRO_PERSONA'];

    // var_dump($result);
    $json_string = json_encode($result);

    // echo $json_string;

    $file = "../Views/js/json/id_perfil.json";

    file_put_contents($file, $json_string);
    
    if($result== null){
        echo "2";
    }else{
        if($result["ID_TIPO"] == 0){ 
            // $_SESSION['ID_REGISTRO_PERSONA'] = "305240627";
            $_SESSION['ID_REGISTRO_PERSONA'] = $result["CEDULA"]; 
            echo "0";
            
        }else if($result["ID_TIPO"] == 1){
            // $_SESSION['ID_REGISTRO_PERSONA'] = "305240627"; 
            $_SESSION['ID_REGISTRO_PERSONA'] = $result["CEDULA"]; 
            // $_SESSION['ID_REGISTRO_PERSONA'] = ISSET($result["CEDULA"]); 
            echo "1";
        }
    }
 
}