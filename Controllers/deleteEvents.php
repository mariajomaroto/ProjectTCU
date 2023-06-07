<?php
require_once("../Models/singUp.php");

$delete = new SingUp();
  
if(isset($_REQUEST['idEvent'])){
   
    $delete -> set_id_event($_REQUEST["idEvent"]);


    if($delete->deleteEvent()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}