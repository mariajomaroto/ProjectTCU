<?php
require_once("../Models/singUp.php");

$insert = new SingUp();
var_dump($_REQUEST);
if(isset($_REQUEST['txt_user_id'])){
    $insert -> set_user_id($_REQUEST["txt_user_id"]);
    $insert -> set_name($_REQUEST["txt_name"]);
    $insert -> set_surname($_REQUEST["txt_surname"]);
    $insert -> set_password($_REQUEST["txt_password"]);
    $insert -> set_gmail($_REQUEST["txt_gmail"]);
    $insert -> set_rol($_REQUEST["txt_rol"]);

    if($insert->insertAdmin()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
      
}else{
    echo ("Error al esperar los datos");
}