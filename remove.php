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
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Remove Member</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css.map">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="text-center justify-content-center">
            <h3>Do you really want to remove ?</h3>
            <form action="php/remove.php" method="post">

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <button type="submit btn btn-primary">Save Changes</button>
            <a href="index.php"><button type="button btn btn-info">Back</button></a>
        </div>
    </body>
</html>

<?php
}
?>
