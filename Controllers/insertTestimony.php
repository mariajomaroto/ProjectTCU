<?php
require_once("../Models/singUp.php");

$insert = new SingUp();
   
if(isset($_REQUEST['txt_person'])){
   
    // echo $_REQUEST["txt_testimony"];
    // echo $_REQUEST["txt_person"];

    $insert -> set_testimony($_REQUEST["txt_testimony"]);
    $insert -> set_user_id($_REQUEST["txt_person"]);

    if($insert->insertTestimony()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}