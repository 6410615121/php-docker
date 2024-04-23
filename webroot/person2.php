<!--6410615121 ศุทธา จงเจริญ-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person</title>
</head>
<body>

<?php
// Controller

require_once 'db_model.php';
if (isset($_POST['insert'])) {
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    if (insert_data_secure($name, $surname, $email, $phone)) {
        $message = 'data inserted successfully';
    } else {
        $message = 'Error inserting data';
    }
} elseif(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    if ( update_data($id, $name, $surname, $email, $phone)){
        $message = "Data updated successfully";
    }else{
        $message = "Error updaing data";
    }
} elseif(isset($_POST['delete'])){
    $id = $_POST['id'];

    if ( delete_data($id) ){
        $message = "Data deleted successfully";
    }else{
        $message = "Error deleting data";
    }
}

//$persons = get_all_data();
//require_once 'data.view.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    $person = get_data($id);
    require_once 'update_form.php';
}

elseif (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $person = get_data($id);
    require_once 'delete_person_confirm.php';
}

elseif (isset($_GET['search'])){
    $search = $_GET['search'];

    $persons = search_name($search);
    require_once 'data.view.php';
}

else{
    $persons = get_all_data();
    require_once 'data.view.php';
}



?>


</body>
</html>
