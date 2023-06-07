<?php
require_once("../Models/singUp.php");

$delete = new SingUp();
  
    if(isset($_REQUEST['id'])){
    
        $delete -> set_id_images($_REQUEST["id"]);


        if($delete->deleteImages()){
            echo "Exitosamente";
        }else{
            echo "Error";
        }
        
    }else{
        echo ("Error al esperar los datos");
    }