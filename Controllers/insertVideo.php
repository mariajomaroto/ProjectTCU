<?php
require_once("../Models/resources.php");

$insert = new Resources();

if(isset($_REQUEST['txt_video_code'])){

    $insert -> set_video_code($_REQUEST["txt_video_code"]);
    $insert -> set_category($_REQUEST["txt_category"]);
    if($insert->insert_video()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
}else{
    echo ("Error al esperar los datos");
}