<?php require_once 'php/db_connect.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Guuu Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css.map">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--NavBar-->
        <div class="menu-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">Guuu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto text-right">
                            <li class="nav-item">
                                <a class="nav-link active" href="writeyours.php">Write Yours!</a>
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
            </div>
            <!--Blog Start-->
            <div class="container blog-post">
                <?php
                    $sql = "SELECT * FROM blog ORDER BY ID DESC";
                    $result = $connect->query($sql);

                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()) {
                            echo"
                            <div class='container blog-post'>
                                <div class='user'>
                                        <div class='avatar'>
                                            <img src='img/avatar.png' alt='Picture of User width='80px' height='80px'>
                                        </div>
                                        <div class='details lead'>
                                            <p>".$row['usrname']."</p>
                                            <p>".$row['age']."</p>
                                            <p>".$row['address']."</p>
                                        </div>
                                </div>
                                <div class='post'>
                                    <div class='lead'>
                                        <p>".$row['title']."</p>
                                        <p>".$row['post']."</p>

                                    </div>
                                </div>
                                <div class='buttons text-right'>
                                    <a href='update.php?id=".$row['id']."'><button class='btn btn-info'>Edit</button></a>
                                    <a href='remove.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a>
                                    <hr class='dashed'>
                                </div>
                                <br />
                            </div>
                            ";
                        }
                    }
            ?>
        <script src="" async defer></script>
    </body>
</html>
