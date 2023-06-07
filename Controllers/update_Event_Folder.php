<?php
// require_once("../Models/resources.php");

// $call_category_image = new Resources();
// var_dump($_FILES['file']["name"]);
if(isset($_FILES['file']["name"])){
    $image_name = $_FILES['file']["name"];
    $folder ='../Views/img/events';
    $temporary = $_FILES['file']["tmp_name"];
    if (move_uploaded_file($temporary,  $folder.'/'.$image_name)) {
        echo "Imagen redireccionada";
    }else{
        echo "No se pudo almacenar la imagen";
    }
}else{
    echo "Error al esperar la imagen";
}