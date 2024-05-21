<?php 
require_once('../db_model.php');

if(isset($_COOKIE['username'])){
    $username = $_COOKIE['username'];
    $user = get_user($username);
    
    if(isset($_POST['email_change'])){
        $new_email = $_POST['new_email'];
        if(update_email($username, $new_email)){
            $user['email'] = $new_email;
        }
    }
    require_once("email_change_view.php");
}else{
    require_once("./login.php");
}




