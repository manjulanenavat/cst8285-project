<html>
<body>

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
$name = $_POST['name'];
$location = $_POST['location'];
$message = $_POST['message'];

$query = "INSERT INTO messages (name, location, message, status) 
VALUES ('$name', '$location', '$message', 'P')";



//debug statements
echo $name;
echo "<br>";
echo $location;
echo "<br>";
echo $message;
echo "<br>";
echo $query;
echo "<br>";




$result = mysqli_query($conn, $query);
echo $result;

if ($result) {
	header('Location: index.php');
} else {
   header('Location: greetings.php?failed=1');
}

mysqli_close($conn);

?>
</body>
</html>