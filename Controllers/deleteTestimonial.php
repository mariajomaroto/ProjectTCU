<?php
require_once("../Models/singUp.php");

$delete = new SingUp();
  
if(isset($_REQUEST['idTesti'])){
   
    $delete -> set_id_testi($_REQUEST["idTesti"]);


    if($delete->deleteTesti()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}