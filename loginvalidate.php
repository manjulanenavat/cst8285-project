
<?php
$servername = "localhost";
$db_uname = "root";
$db_passwd = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $db_uname, $db_passwd, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read posted form values into local variables.
$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) == 1) {
	session_start();
    $_SESSION['admin'] = 1; 
	header('Location: admin.php');
} else {
	session_stop();
   header('Location: login.php?failed=1');
}

mysqli_close($conn);

?>


