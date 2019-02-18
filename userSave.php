<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #8cbaa6;
        }
        /*form{*/
            /*border: 2px solid #ba6f16;*/
            /*border-radius: 10px;*/
        /*}*/
    </style>
</head>
<body>
    <form action="userSaveProcess.php" method="POST">
        <fieldset>
        <legend>
            <a href="viewUsers.php">View Users</a>
        </legend>
        <input type="text" name="x" placeholder="Name" class="form-group" required><br>
        <input type="email" name="y" placeholder="eMail" class="form-group" required><br>
        <input type="password" name="z" placeholder="Password" class="form-group" required><br>
        <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
        <input type="reset" name="btnreset" value="Refresh" class="btn btn-warning">
        </fieldset>
    </form>
</body>
</html>