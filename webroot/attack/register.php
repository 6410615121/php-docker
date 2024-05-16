<?php 
    require_once('register_view.php');
    require_once('../db_model.php');

    if(isset($_GET['username'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $password_confirm = $_GET['password_confirm'];
        $email = $_GET['email'];
        
        create_user($username, $password, $email);

        echo "<script>location.href='login.php';</script>";
        exit;
    }

    


