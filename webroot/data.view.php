<!--6410615121 ศุทธา จงเจริญ-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person</title>

    <style>
        .text-center {
            text-align: center;
        }

        th, td, table {
            border-collapse: collapse;
            padding: 0.4em;
            border: 1px solid black;
            margin: auto;
        }
    </style>
</head>
<body>

<?php

echo "<h1 class='text-center'>Persons Table</h1>";

if (isset($message)) {
    echo "<p class='text-center'>$message</p>";
}

echo
"<p class='text-center'>
<a href='person2.php'>Home</a> |
<a href='person_form.php'>Add person</a>
</p>

<form action='person2.php' method='get' class='text-center'>
    <input type='text' placeholder='search name' name='search'>
    <input type='submit' value='search'>
</form>

<br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    
    <tbody>";

if(count($persons) === 0){
    echo "
        <tr>
            <td>" . "no data" . "</td>
            <td>" . "no data" .  "</td>
            <td>" . "no data" . "</td>
            <td>" . "no data" . "</td>
            <td>". "no data" . "</td>
            <td>". "no data" . "</td>
        </tr>\n";
}

foreach ($persons as $person) {
//    echo $person['id'] , ' ';
//    echo $person['name'] , ' ';
//    echo $person['surname'] , "\n<br>";
    echo "
        <tr>\n 
            <td>" . $person['id'] . "</td>
            <td>" . $person['name'] . " " . $person['surname'] . "</td>
            <td>" . $person['email'] . "</td>
            <td>" . $person['phone'] . "</td>
            <td><a href='person2.php?update=". $person['id'] ."'>Update</a></td>
            <td><a href='person2.php?delete=". $person['id'] ."'>Delete</a></td>
        </tr>";
}

echo "
    </tbody>
</table>
";

?>

</body>
</html>
