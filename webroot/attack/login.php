<?php 
require_once('../db_model.php');
if(isset($_GET['username'])){
    $username = $_GET['username'];
    $password = $_GET['password'];
    
    $result =  login($username, $password);
    if($result){
        setcookie('username', $username);
        echo "<script>location.href='index.php';</script>";
        exit;
    }else{
        require_once('login_view.php');
    }
}else{
    require_once('login_view.php');
}
