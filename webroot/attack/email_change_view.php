<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email_change</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php include_once('./navbar.php'); ?>

    <div class="d-flex justify-content-center align-items-center flex-grow-1 h-100 mt-4" >
        <div class="card" style="width: 25rem;">
            <div class="card-body" >
                <h6>your email is: <?= $user['email'] ?></h6> 
                <form method="post" action="">
                    <label for="new_email">Email Change:</label>
                    <input type="text" class="form-control mt-1" placeholder="Enter email" name="new_email" >

                    <input type="hidden" name="email_change" value="1">
                    <input type="submit" class="btn btn-success mt-1">
         
                </form>
            </div>
        </div>
    </div>

</body>
</html>