<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'day5';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die("Couldn't Connect to Database ".mysqli_error($conn));
}

mysqli_select_db($conn, $dbname);

// $insert = "
// INSERT INTO `users` (`username`, `password`) VALUES ('mahmoud', '1234');
// ";
// mysqli_query($conn, $insert);

$userErr = $passErr = '';
if (isset($_REQUEST['submit'])) {
    if ($stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?")) {
        // Bind parameters (s = string, i = int)
        $stmt->bind_param('s', $_REQUEST['username']);
        $stmt->execute();
        $stmt->store_result();
    
        if($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
    
            if ($_POST['password'] === $password) {
                session_start();
                session_regenerate_id(true);
                echo session_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                header('Location: home.php');
            } else {
                $passErr = 'Incorrect password!';
            }
    
        } else {
            $userErr = 'Incorrect username';
        }
    
        $stmt->close();
    }
}

?>