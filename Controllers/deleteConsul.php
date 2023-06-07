<?php
require_once("../Models/singUp.php");

$delete = new SingUp();
  
if(isset($_REQUEST['idConsul'])){
   
    $delete -> set_id_consul($_REQUEST["idConsul"]);


    if($delete->deleteConsul()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}