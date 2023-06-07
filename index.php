<?php

session_start();

if(!isset($_GET["access"])){
    require_once("Views/Perfil/User/home.php");
}else{
    require_once("Controllers/viewControllers.php");
    $view = new viewControllers();
    $module = $view->get_controllers_views($_GET["access"]);
    if($module=="404"){
        require_once("Views/Perfil/404.php");
    }else{
        require_once("Views/Perfil/".$module.".php");
    }
    
    
}