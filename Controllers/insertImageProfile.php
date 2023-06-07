<?php
require_once("../Models/resources.php");

$call_category_image = new Resources();

if(isset($_FILES['file']["name"])){
    $image_name = $_FILES['file']["name"];
    $result = $call_category_image -> set_image_name($image_name);
   

    $folder = '../Views/img/profile';

    $temporary = $_FILES['file']["tmp_name"];
    if (move_uploaded_file($temporary,  $folder.'/'.$image_name)) {
        echo "Imagen redireccionada";
    }else{
        echo "No se pudo almacenar la imagen";
    }
}else{
    echo "Error al esperar la imagen";
}