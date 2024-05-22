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
        height: 100dvh;
      }
    </style>

</head>
<body>

<div class="d-flex justify-content-center align-items-center flex-grow-1 h-100" >
    <div class="card" style="width: 25rem;">
      <div class="card-header">
        <h2>Register</h2>
      </div>
      <div class="card-body" >
        <form method="get">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" required><br>

          <label for="password">Password</label>
          <input type="text" class="form-control " name="password" id="password" required><br>

          <label for="password_confirm">Password Confirm</label>
          <input type="text" class="form-control" name="password_confirm" id="password_confirm" required><br>

          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id="email" required><br>

          <input type="hidden" name="register" value="1">

          <input type="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
</div>

</body>
</html>