<?php
require_once("../Models/singUp.php");

$insert = new SingUp();
  
if(isset($_REQUEST['txt_names'])){
   
    $insert -> set_name($_REQUEST["txt_names"]);
    $insert -> set_surname($_REQUEST["txt_lastnames"]);
    $insert -> set_gmail($_REQUEST["txt_gmail"]);
    $insert -> set_subjet($_REQUEST["txt_subject"]);
    $insert -> set_consul($_REQUEST["txt_text"]);

    if($insert->insertQuery()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}