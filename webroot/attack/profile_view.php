<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand ml-5" href="./index.php">Home</a>
        <a class="navbar-brand"  href="./profile.php">Profile</a>
    </nav>


    <div class="d-flex flex-column align-items-center" id="info_user">
        <div class="card" style="margin-top: 5rem;">
            <div class="card-body">
                <h5>Username: <?= $user['username'] ?></h5>
                <h5>Email: <?= $user['email'] ?></h5>
                <a href="./email_change.php" class="btn btn-secondary mt-3">Change Email</a><br>
                <a href="./logout.php" class="btn btn-danger mt-3" >Log out</a>
 
            </div>
        </div>
    </div>
    
</body>
</html>