<?php
require_once("../Models/resources.php");

$call_category_image = new Resources();

if(isset($_FILES['file']["name"])){
    $image_name = $_FILES['file']["name"];
    $result = $call_category_image -> set_image_name($image_name);
    $result = $call_category_image-> search_folder();
    $folder ='';

    if ($result['CODIGO_IMG'] == 'C-P') {
        $folder = '../Views/img/church';
    }elseif($result['CODIGO_IMG'] == 'C-J'){
        $folder = '../Views/img/young_people';
    }elseif($result['CODIGO_IMG'] == 'C-N'){
        $folder = '../Views/img/children';
    }
    $temporary = $_FILES['file']["tmp_name"];
    if (move_uploaded_file($temporary,  $folder.'/'.$image_name)) {
        echo "Imagen redireccionada";
    }else{
        echo "No se pudo almacenar la imagen";
    }
}else{
    echo "Error al esperar la imagen";
}