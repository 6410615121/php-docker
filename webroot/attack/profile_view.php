<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <style>
    body {
        height: 100dvh;
    }
   </style>
</head>
<body>
    <div class="h-100 w-100 d-flex flex-column">
        <?php include_once('./navbar.php'); ?>

        <div class="d-flex justify-content-center align-items-center flex-grow-1" id="info_user">
            <div class="card" style="width: 20%">
                <div class="card-body">
                    <div class="d-flex justify-content-center flex-column">
                        <h5>Username: <?= $user['username'] ?></h5>
                        <h5>Email: <?= $user['email'] ?></h5>
                        <a href="./email_change.php" class="btn btn-secondary mt-3">Change Email</a><br>
                        <a href="./logout.php" class="btn btn-danger mt-3" >Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    
</body>
</html>