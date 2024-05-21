<?php 
    require_once("../db_model.php");
    

    if(isset($_POST['delete_all_comments'])){
        delete_all_comments();
    }

    require_once("admin_view.php");
