<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:50 AM
 */
if (isset($_POST['btnsubmit'])){
    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    $encrPassword = md5($password);

    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo "Failed to Connect to the DB";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$encrPassword')");
        if (!$insert){
            echo "Failed to save";
        }else{
            echo "$name Saved Successfully ";
            echo "<a href='userSave.php' class='btn btn-primary'>Add User</a>";
            echo "<a href='viewUsers.php' class='btn btn-primary'>View User</a>";
        }
    }
}

?>
</body>
</html>