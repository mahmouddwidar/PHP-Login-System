<?php
    include 'authenticate.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./npm/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./npm/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <title>Login</title>
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
        .btn {
            margin: 0 auto !important;
        }
        .err {color:red;}
    </style>
</head>
<body class="bg-secondary">
    <!-- <div class="container">
        <div class="row pt-3 pb-3 px-2 bg-light rounded col-3 mx-auto shadow">
            <form action='<?php $_SERVER['PHP_SELF'] ?>' method="post" class=" text-center">
                <label><i class="bi bi-person-bounding-box"></i><input type="text" name="username" class="rounded ms-1 border border-1 p-1" required></label>
                <span class='err'><?php echo $userErr ?></span><br><br>
                <label><i class="bi bi-key-fill"></i><input type="password" name="password" class="rounded ms-1 border border-1 p-1" required></label>
                <span class='err'><?php echo $passErr ?></span><br><br>
                <input type="submit" name='submit' value="Login" class="btn btn-primary">
            </form>
            <p class="text-muted mt-3">don't have an account? <a href="signup.php">signup</a></p>
        </div>
    </div> -->

    <div class="row pt-3 pb-3 px-2 bg-light rounded col-3 mx-auto shadow">
            <p class="h2 text-dark text-center mb-4">Login</p>
            <form action="" method="post" class="text-center col-12 mx-auto mb-3">
                <label class="h6 w-100">username: <input type="text" name="username" class="rounded ms-1 border border-1 p-1" required></label>
                <span class='err'><?php echo $userErr ?></span><br><br>
                <label class="h6 w-100 ">password: <input type="password" name="password" class="rounded ms-1 border border-1 p-1" required></label>
                <span class='err'><?php echo $passErr ?></span><br><br>
                <input type="submit" value="Login" name='submit' class="btn btn-primary w-50">
            </form>
            <hr>
            <p class="text-muted text-center">don't have an account? <a href="signup.php">signup</a></p>
    </div>
    <script src="./npm/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
?>