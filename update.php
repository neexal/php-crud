

<?php

require_once 'php/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM blog WHERE id = {$id}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Update Post</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css.map">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navbar-->
    <div class="menu-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">php_crud</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto text-right">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Write Yours!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><button class="btn btn-primary">Login</button></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
    <!--form start-->
    <div class="container">
        <div class="row">
            <form action="php/update.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="usrname" placeholder="Eg: Username" value="<?php echo $data['usrname'] ?>">
            </div>
            <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Eg: 20" value="<?php echo $data['age'] ?>">
            </div>
            <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Eg: 123 Street Road" value="<?php echo $data['address'] ?>">
            </div>
            <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Write your blog title here:" value="<?php echo $data['title'] ?>">
            </div>
            <div class="form-group">
                    <label>Write your blog here:</label>
                    <input type="text" class="form-control" name="blog" placeholder="Eg: blog" value="<?php echo $data['post'] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id']?>" />
            <button type="submit" class="btn btn-primary form-control">Update</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
}
?>
