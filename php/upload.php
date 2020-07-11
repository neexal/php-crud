<?php

require_once '../php/db_connect.php';

if ($_POST) {
    $usrname = $_POST['usrname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $title = $_POST['title'];
    $blog = $_POST['blog'];

    $sql = "INSERT INTO blog (usrname, age, address, title, post) values ('$usrname','$age','$address','$title','$blog')";

    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}

?>