<?php
    require_once('../db_model.php');

    if(isset($_COOKIE['username'])){
        $comments = getComments();

        if(isset($_POST['add_comment']) and isset($_POST['comment'])){
            addComment($_POST['comment']);
        }
    }
    require_once('index_view.php')
?>
<?php if(isset($_COOKIE['username'])):  ?>
    <?php 

    ?>


    <?php require_once('index_view.php') ?>
<?php else: ?>
    <?= "<script>location.href='login.php';</script>" ?>
<?php endif; ?>
