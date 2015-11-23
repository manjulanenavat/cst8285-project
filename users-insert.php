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
$username = $_POST['username'];
$password = $_POST['password'];

//Sql query to insert username and password into database.
$sql = "INSERT INTO users (Username, Password) VALUES ('$username', '$password')";

//debug statements
echo $username;
echo "<br>";
echo $password;
echo "<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
</body>
</html>