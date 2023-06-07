<?php
require_once("../Models/resources.php");

$insert = new Resources();

if(isset($_REQUEST['sel_category'], $_REQUEST['img_file_name'])){
    $file = $_REQUEST['img_file_name'];
    $file_replace = basename(str_replace( "\\", '/', $file ));
    $insert -> set_path_img($file_replace);
    $insert -> set_category_image($_REQUEST['sel_category']);
    if($insert->insertImage()){
        echo "Imagen almacenada";
    }else{
        echo "Error al almacenar la imagen";
    }
}else{
    echo "Error al esperar datos";
}