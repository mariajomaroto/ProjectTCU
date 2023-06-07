<?php
require_once("../Models/resources.php");

$update = new Resources();

if(isset($_REQUEST['txt_id'])){

    $file = $_REQUEST['img_file_profile'];
    $file_replace = basename(str_replace( "\\", '/', $file ));
    $update -> set_path_img($file_replace);
    $update -> set_id($_REQUEST["txt_id"]);

    if($update->updateImage()){
        echo "Imagen almacenada";
    }else{
        echo "Error al almacenar la imagen";
    }
}else{
    echo "Error al esperar datos";
}