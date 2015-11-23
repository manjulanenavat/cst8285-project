<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Messages (Name, Location, Message, Status)
VALUES 
('$_POST[name]','$_POST[location]'sdz,'$_POST[message]','$_POST[status]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>