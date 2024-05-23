<?php
// Filename: db_model.php

$server = "mariadb"; //localhost
$username = "root";
$password = "secret";
$database = "my_db";

function db_connect($server, $username, $password, $database)
{
    $link = mysqli_connect($server, $username, $password, $database);
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $link;
}

$link = db_connect($server, $username, $password, $database);

function get_all_data()
{
    global $link;
    $query = 'select * from persons ORDER BY id desc';
    $result = mysqli_query($link, $query);

    //while($row = mysqli_fetch_assoc($result)){
    //    $persons[] = $row;
    //}

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $persons;
}

function insert_data_secure($name, $surname, $email, $phone){
    global $link;

    // Create a prepared statement(sql statement)
    $stmt = mysqli_stmt_init($link);
    $query = "INSERT INTO persons (name, surname, email, phone)
              VALUES (?, ?, ?, ?)";
    mysqli_stmt_prepare($stmt, $query);

    // bind parameters for markers
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $surname, $email, $phone);

    // execute query
    return mysqli_stmt_execute($stmt); // Return True or false

}

//function insert_data($name, $surname, $email, $phone)
//{
//    global $link;
//    $query = "INSERT INTO persons (name, surname, email, phone) VALUES('$name', '$surname', '$email', '$phone')";
//    $result = mysqli_query($link, $query);
//
//    if (!$result) {
//        die("Query failed: " . mysqli_error($link));
//    }
//    return $result; // Return true or False
//}


function get_data($id){
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "SELECT * FROM persons WHERE id = ?";
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // execute query
    if (! mysqli_stmt_execute($stmt)){
        die("Query failed" .  mysqli_error($link));
    }
    // get result
    $result = mysqli_stmt_get_result($stmt);
    $person = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    return $person;

}

function update_data($id, $name, $surname, $email, $phone){
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "UPDATE persons 
              SET name=?, surname=?, email=?, phone=? 
              WHERE id=?";
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'ssssi', $name, $surname, $email, $phone, $id);

    return mysqli_stmt_execute($stmt); // Return True or false

}

function delete_data($id){
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "DELETE FROM persons WHERE id = ?";
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    return mysqli_stmt_execute($stmt); // Return True or false
}

function search_name($search_text){
    $persons = get_all_data();
    $persons_found= [];

    foreach($persons as $person){
        $person_fullname = $person['name'] . ' ' . $person['surname'];
        
        if( stripos($person_fullname, $search_text) !== false) {
            $persons_found[] = $person;
        }
    }
    return $persons_found;
}

    // global $link;
    // $stmt = mysqli_stmt_init($link);
    // $query = "SELECT * FROM persons WHERE name = ? OR surname = ?";
    // mysqli_stmt_prepare($stmt, $query);
    // mysqli_stmt_bind_param($stmt, 'ss', $search_text, $search_text);

    // // execute query
    // if (! mysqli_stmt_execute($stmt)){
    //     die("Query failed" .  mysqli_error($link));
    // }

    // // get result
    // $result = mysqli_stmt_get_result($stmt);
    // $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // mysqli_stmt_close($stmt);

function create_user($username, $password, $email)
{
   global $link;
   $query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
   $result = mysqli_query($link, $query);

   if (!$result) {
       die("Query failed: " . mysqli_error($link));
   }
   return $result; // Return true or False
}

function login($username, $password){
    global $link;
    $query = "SELECT username, email FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        return $user; // Login successful
    } else {
        return false; // Login unsuccessful
    }
}

function addComment($comment,$user){
    global $link;
    $query = "INSERT INTO comments (comment,user) VALUES('$comment','$user')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }
    return $result; // Return true or False
}

function getComments(){
    global $link;
    $query = "SELECT * FROM comments";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $comments;
}

function delete_all_comments(){
    global $link;
    $query = "DELETE FROM comments";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }
    return $result; // Return true or False
}

function get_user($username){
    global $link;
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    $user = mysqli_fetch_assoc($result);
    return $user; // Return true or False
}

function update_email($username, $new_email){
    global $link;
    $query = "UPDATE users set email = '$new_email' WHERE username = '$username'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    return $result; // Return true or False
}


