<?php
require_once("../Models/singUp.php");

$insert = new SingUp();

if(isset($_REQUEST['txt_user_id'])){
    $insert -> set_user_id($_REQUEST["txt_user_id"]);
    $insert -> set_name($_REQUEST["txt_name"]);
    $insert -> set_surname($_REQUEST["txt_surname"]);
    $insert -> set_password($_REQUEST["txt_password"]);
    $insert -> set_gmail($_REQUEST["txt_gmail"]);

    if($insert->create()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}