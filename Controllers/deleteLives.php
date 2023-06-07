<?php
require_once("../Models/resources.php");

$delete = new Resources();
  
if(isset($_REQUEST['id_live'])){
   
    $delete -> set_live_code($_REQUEST["id_live"]);


    if($delete->deletelive()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }

}else{
    echo ("Error al esperar los datos");
}