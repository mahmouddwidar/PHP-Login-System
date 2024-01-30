<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./npm/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./npm/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
	</head>
	<body class="bg-secondary">
		<nav class="navtop">
			<div class="text-center">
				<h1 class="text-center text-dark mt-4">Home page</h1>
				<a href="logout.php" class="text-warning"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
			</div>
		</nav>
        <div class='border-dark border border-1 mt-4 mb-5'></div>
		<div class="text-center">
			<h2 class="text-white">Welcome back, <?=$_SESSION['name']?>!</h2>
		</div>

        <script src="./npm/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>