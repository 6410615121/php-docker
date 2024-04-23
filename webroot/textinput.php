<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="formhandler.php" method="post">
    <label for="name">First Name:</label>
    <input type="text" id="name" name="fname" value="Somsak" required><br>

    <label for="surname">Last Name:</label>
    <input type="text" id="surname" name="lname" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    Gender:<br>
    <input type="radio" name="gender" id="male" value="ชาย">
    <label for="male">Male</label>

    <input type="radio" name="gender" id="female" value="หญิง">
    <label for="female">Female</label><br>

    Receive newsleter:<br>
    <input type="checkbox" name="receive[]" id="newsletter" value="paper">
    <label for="newsletter">Paper newsletter</label>

    <input type="checkbox" name="receive[]" id="email" value="email">
    <label for="email">Email newsletter</label><br>

    Your car:<br>
    <select name="car[]" size="4" multiple>
        <option value="volvo">Volvo</option>
        <option value="benz" selected>Benz</option>
        <option value="honda" selected>Honda</option>
        <option value="bmw">BMW</option>
    </select><br>

    <textarea name="address" cols="30" rows="10"></textarea><br>

    <input type="hidden" name="subject" value="cn334">


    <input type="submit" value="submit">
    <input type="reset">


</form>


</body>
</html>