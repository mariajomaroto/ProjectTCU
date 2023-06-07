<?php
require_once("../Models/singUp.php");

$update = new SingUp();
   
if(isset($_REQUEST['txt_id'])){
  
  
    // echo ($_REQUEST["txt_id"]);
    // echo ($_REQUEST["txt_Name"]);
    // echo ($_REQUEST["txt_surname"]);
    // echo ($_REQUEST["txt_date"]);
    // echo ($_REQUEST["txt_gender"]);
    // echo ($_REQUEST["txt_gmail"]);
    // echo ($_REQUEST["txt_phone"]);

    $update -> set_user_id($_REQUEST["txt_id"]);
    $update -> set_name($_REQUEST["txt_Name"]);
    $update -> set_surname($_REQUEST["txt_surname"]);
    $update -> set_date($_REQUEST["txt_date"]);
    $update -> set_gender($_REQUEST["txt_gender"]);
    // $update -> set_password($_REQUEST["txt_passwordd"]);
    // $update -> set_dateadmission($_REQUEST["txt_admission"]);
    // $update -> set_rol($_REQUEST["txt_rol"]);
    $update -> set_gmail($_REQUEST["txt_gmail"]);
    $update -> set_phone($_REQUEST["txt_phone"]);
    
    if($update->UpdateMyprofile()){
        echo "Exitosamente";
    }else{
        echo "Error";
    }
     
}else{
    echo ("Error al esperar los datos");
}