<?php
require_once("../Models/resources.php");

$delete = new Resources();
  
if(isset($_REQUEST['id_Video'])){
   
    $delete -> set_idVideo($_REQUEST["id_Video"]);


    if($delete->deleteVideo()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}