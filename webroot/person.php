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
        body {
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0.4em;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
require 'data.inc.php';

echo "
<table>\n
    <thead>\n
        <tr>\n
            <th>ID</th>\n
            <th>Full Name</th>\n
            <th>Email</th>\n
            <th>Phone</th>\n
        </tr>\n
    </thead>\n
    \n
    <tbody>\n
    ";

foreach ($persons as $person){
//    echo $person['id'] , ' ';
//    echo $person['name'] , ' ';
//    echo $person['surname'] , "\n<br>";
echo "
        <tr>\n 
            <td>". $person['id']. "</td>\n 
            <td>". $person['name']. " " . $person['surname']. "</td>\n
            <td>". $person['email']. "</td>\n
            <td>". $person['phone']. "</td>\n
        </tr>\n";
}

echo "
    </tbody>\n
</table>\n
";

?>


</body>
</html>
