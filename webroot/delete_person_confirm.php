<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete confirm</title>
</head>
<body>
<form action="person2.php" method="post">
    <p>are you sure that you want to delete this person's information?</p>
    

    ID: <?= $person['id'] ?><br>
    Name : <?= $person['name'] ?> <?= $person['surname'] ?><br>
    Email : <?= $person['email'] ?><br>
    Phone: <?= $person['phone'] ?><br>
    <br>

    <input type="hidden" name="id" value=<?= $person['id']?> >
    <input type="hidden" name="delete" value="1">
    
    <p><a href="person2.php">Go back</a></p>
    <input type="submit" value="Confirm Delete">
</form>
</body>
</html>