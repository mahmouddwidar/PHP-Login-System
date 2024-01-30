<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./npm/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./npm/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <title>Sign-up</title>
    <style>
        .container {
            height: 100vh;
            position: relative;
        }
        .row {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body class="bg-secondary">
        <div class="row pt-3 pb-3 px-2 bg-light rounded col-3 mx-auto shadow">
            <p class="h2 text-dark text-center mb-4">Sign-Up</p>
            <form action="" method="post" class="text-center col-12 mx-auto mb-3">
                <label class="h6 w-100">username: <input type="text" name="username" class="rounded ms-1 border border-1 p-1" required></label><br><br>
                <label class="h6 w-100 ">password: <input type="password" name="password" class="rounded ms-1 border border-1 p-1" required></label><br><br>
                <input type="submit" value="sign up" name='submit' class="btn btn-primary w-50">
            </form>
            <hr>
            <p class="text-muted text-center mb-0">Have an account? <a href="index.php">Login</a></p>
    </div>
    
<script src="./npm/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'day5';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die("Couldn't Connect to Database ".mysqli_error($conn));
}

$creatDb = "CREATE DATABASE IF NOT EXISTS $dbname";
$createRetval = mysqli_query($conn, $creatDb);

if(!$createRetval) {
    die("Couldn't Create The Database".mysqli_error($conn));
}

mysqli_select_db($conn, $dbname);

$createTable = "CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    primary key (`id`)
)";

$tableRetval = mysqli_query($conn, $createTable);

if(!$tableRetval) {
    die("Couldn't Create The Table ".mysqli_error($conn));
}

$username = $password = '';
$nameErr = $passErr = '';

if (!empty($_REQUEST["username"])) {
    $username = trim($_REQUEST['username']);
}

if (!empty($_REQUEST["password"])) {
    $password = trim($_REQUEST['password']);
}

if (isset($_REQUEST['submit'])) {
    if ((isset($_REQUEST['username']) && $_REQUEST['username'] != '') && (isset($_REQUEST['password']) && $_REQUEST['password'] != '')) {
        $sql = "INSERT INTO users(username, password)
                    VALUES ('$username', '$password')";
        $insertRetval = mysqli_query($conn, $sql);
        header("Location:index.php");
    
        if(! $insertRetval ) {
            die('Could not insert to table: ' . mysqli_error($conn));
        }
    }
}

?>