<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $usrname = $_POST['usrname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $title = $_POST['title'];
    $blog = $_POST['blog'];
    $id = $_POST['id'];
 
    $sql = "UPDATE blog SET usrname = '$usrname', age = '$age', address = '$address', title = '$title', post = '$blog' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>