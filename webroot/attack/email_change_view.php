<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email_change</title>
</head>
<body>
    <a href="./index.php">index</a><br>

    your email is <?= $user['email'] ?>


    <form action="" method="post">
        <label for="">Email Change:</label>
        <input type="text" placeholder="Enter email" name="new_email">

        <input type="hidden" name="email_change" value="1">
        <input type="submit">
    </form>
</body>
</html>