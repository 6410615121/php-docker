<?php 
    require_once('../db_model.php');

    if(isset($_GET['register'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $password_confirm = $_GET['password_confirm'];
        $email = $_GET['email'];
        
        if(create_user($username, $password, $email)){
            echo "<script>location.href='login.php';</script>";
            exit;
        }else{
            require_once('register.php');
        }
        
    }else{
        require_once('register_view.php');
    }

    


