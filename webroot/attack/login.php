<?php 
require_once('../db_model.php');
if(isset($_GET['username'])){
    $username = $_GET['username'];
    $password = $_GET['password'];
    
    if(login($username, $password)){
        setcookie('username', $username);
        echo "<script>location.href='index.php';</script>";
        exit;
    }
}else{
    require_once('login_view.php');
}


