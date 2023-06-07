<?php


require_once "Models/viewsModels.php";
class viewControllers extends viewModels{
    public function get_controllers_views($access){
        if(!isset($access)){
            $result ="User/home";
        }else{
            $route = $access;
            $result = viewModels::get_models_view($route);
        }
        return $result;
    }

}


?>