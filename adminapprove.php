<?php

if (isset($_GET['id'])) {
	$id  = $_GET['id'];
	echo $id;
}

if (isset($_GET['status'])) {
	$status = $_GET['status'];
	echo $status;
}

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
$query = "UPDATE messages SET status='$status' WHERE id='$id'";

echo $query;

$result = mysqli_query($conn, $query);
echo $result;

if ($result) {
	header('Location: admin.php?success=1');
} else {
	header('Location: admin.php?success=0');
}

mysqli_close($conn);

?>
