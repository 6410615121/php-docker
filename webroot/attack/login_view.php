<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- style -->
  <style>
     body {
      height: 100dvh;
    }
  </style>
</head>
<body>

  <div class="d-flex justify-content-center align-items-center flex-grow-1 h-100" >
    <div class="card" style="width: 25rem;">
      <div class="card-header">
        <h3>Login</h3>
      </div>
      <div class="card-body" >
        
        <form method="get">
          
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username"><br>
          
          <label for="password">Password</label>
          <input type="text" class="form-control" name="password" id="password"><br>
          
          <a href="./register.php" >Register</a><br>

          <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
