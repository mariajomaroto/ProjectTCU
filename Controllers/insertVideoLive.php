<?php
require_once("../Models/resources.php");

$insert = new Resources();

if(isset($_REQUEST['txt_video_code_live'])){
    $insert -> set_live_category($_REQUEST["txt_category_live"]);
    $insert -> set_live_code($_REQUEST["txt_video_code_live"]);
    if($insert->insert_live()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
}else{
    echo ("Error al esperar los datos");
}