<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cst8285";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Persons (Firstname, Lastname, Age)
VALUES 
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>