<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #8cbaa6;
        }
    </style>
</head>
<body>
    <form action="updateProcess.php" method="POST">
        <?php
        /**
         * Created by PhpStorm.
         * User: emobilis
         * Date: 2/13/19
         * Time: 9:41 AM
         */
        extract($_GET);
        $conn = mysqli_connect("localhost","root","","safari");
        $fetch = mysqli_query($conn,"SELECT * FROM majina WHERE id=$y");
        if (!$fetch){
            echo "Fetching Failed";
        }else {
            $row = mysqli_fetch_assoc($fetch);
            extract($row);
        }
        ?>
        <input type="hidden" name="id" value="<?php echo $id;?>" class="form-group"> <br>
        <input type="text" name="name" value="<?php echo $jina;?>" class="form-group"><br>
        <input type="email" name="email" value="<?php echo $arafa;?>" class="form-group"><br>
        <input type="text" name="pass" value="<?php echo $siri;?>" class="form-group"><br>
        <input type="submit" name="btnsubmit" value="Update" class="btn btn-success btn-block">
    </form>
</body>
</html>