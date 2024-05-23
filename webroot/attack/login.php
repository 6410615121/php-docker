<?php 
require_once('../db_model.php');
if(isset($_GET['username'])){
    $username = $_GET['username'];
    $password = $_GET['password'];
    
    $login = login($username, $password);
    if($login){
        setcookie('username', $login['username']);
        setcookie('email', $login['email']);
        echo "<script>location.href='index.php';</script>";
        exit;
    }
}else{
    require_once('login_view.php');
}


