<?php
class viewModels{
    protected static function get_models_view($route){
        $white_List=["User/home","User/about_us","User/testimonials","User/videos","User/images", "User/live", "User/events", "User/my_profile","User/privacy","User/terms_and_conditions","User/close_session","User/contact", "User/login","Admin/home","Admin/about_us","Admin/testimonials","Admin/videos","Admin/images", "Admin/live", "Admin/events","Admin/my_profile","Admin/privacy","Admin/terms_and_conditions","Admin/close_session", "Admin/contact", "Admin/login", "Admin/eventModel", "Admin/consultation", "Admin/eventupdate"];
        $get_list=["U-101","U-102","U-103","U-104","U-105","U-106","U-107","U-108","U-109","U-110","U-111","U-112","U-113","A-201","A-202","A-203","A-204","A-205","A-206","A-207","A-208","A-209","A-210","A-211","A-212","A-213","A-214","A-215","A-216"];
        if(in_array($route, $get_list)){
            switch ($route) {
                //user
                case 'U-101':
                    $module_access = $white_List[0];
                    break;
                case 'U-102':
                    $module_access = $white_List[1];
                    break;
                case 'U-103':
                    $module_access = $white_List[2];
                    break;
                case 'U-104':
                    $module_access = $white_List[3];
                    break;
                case 'U-105':
                    $module_access = $white_List[4];
                    break;
                case 'U-106':
                    $module_access = $white_List[5];
                    break;
                case 'U-107':
                    $module_access = $white_List[6];
                    break;
                case 'U-108':
                    $module_access = $white_List[7];
                    break;
                case 'U-109':
                    $module_access = $white_List[8];
                    break;
                case 'U-110':
                    $module_access = $white_List[9];
                    break;
                case 'U-111':
                    $module_access = $white_List[10];
                    break;   
                case 'U-112':
                    $module_access = $white_List[11];
                    break;  
                case 'U-113':
                    $module_access = $white_List[12];
                    break;    
                    
                    //admin
                case "A-201":
                    $module_access = $white_List[13];
                    break;
                case "A-202":
                    $module_access = $white_List[14];
                    break;
                case "A-203":
                    $module_access = $white_List[15];
                    break;
                case "A-204":
                    $module_access = $white_List[16];
                    break;
                case "A-205":
                    $module_access = $white_List[17];
                    break;
                case "A-206":
                    $module_access = $white_List[18];
                    break;
                case "A-207":
                    $module_access = $white_List[19];
                    break;
                case "A-208":
                    $module_access = $white_List[20];
                    break;
                case "A-209":
                    $module_access = $white_List[21];
                    break;
                case "A-210":
                    $module_access = $white_List[22];
                    break;
                case "A-211":
                    $module_access = $white_List[23];
                    break;
                case "A-212":
                    $module_access = $white_List[24];
                    break;
                case "A-213":
                    $module_access = $white_List[25];
                    break;
                    
                case "A-214":
                    $module_access = $white_List[26];
                    break;
                case "A-215":
                    $module_access = $white_List[27];
                    break;
                case "A-216":
                    $module_access = $white_List[28];
                    break;

            }
        }else{
            $module_access ="404";
        }
        return $module_access;
    }
}


?>