<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <style>
      body {
        height: 80dvh;
      }
    </style>

</head>
<body>

<div class="d-flex justify-content-center align-items-center flex-grow-1 h-100" >
    <div class="card" style="width: 25rem;">
      <h2>Register</h2>
      <div class="card-body" >
        <form method="get">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" required><br>

          <label for="password">password</label>
          <input type="text" class="form-control" name="password" id="password" required><br>

          <label for="password_confirm">password confirm</label>
          <input type="text" class="form-control" name="password_confirm" id="password_confirm" required><br>

          <label for="email">email</label>
          <input type="text" class="form-control" name="email" id="email" required><br>
          
          <a href="./login.php" >Login</a><br>
          <input type="submit">
        </form>
      </div>
    </div>
</div>

</body>
</html>