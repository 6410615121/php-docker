<?php 
require_once('../db_model.php');

if(isset($_COOKIE['username'])){
    $username = $_COOKIE['username'];
    $user = get_user($username);
    
    
    require_once("profile_view.php");
}else{
    require_once("./login.php");
}
