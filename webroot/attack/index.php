<?php if(isset($_COOKIE['username'])):  ?>
    <?php require_once('index_view.php') ?>
<?php else: ?>
    <?= "<script>location.href='login.php';</script>" ?>
<?php endif; ?>
