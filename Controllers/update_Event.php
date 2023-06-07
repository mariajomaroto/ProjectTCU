<?php
require_once("../Models/singUp.php");

$update = new SingUp();
   
if(isset($_REQUEST['txt_Id'])){
    $file = $_REQUEST['txt_Eventimg'];
    $file_replace = basename(str_replace( "\\", '/', $file ));

    $update -> set_id_event($_REQUEST["txt_Id"]);
    $update -> set_name($_REQUEST["txt_Name"]);
    $update -> set_nameEvent($_REQUEST["txt_Eventname"]);
    $update -> set_timeEvent($_REQUEST["txt_Eventtime"]);
    $update -> set_imageEvent($file_replace);
    $update -> set_dscEvent($_REQUEST["txt_Desc"]);
    $update -> set_dateEvent($_REQUEST["txt_Eventdate"]);
    
    if($update->UpdateEvent()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}