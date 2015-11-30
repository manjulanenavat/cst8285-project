
<html>
<body>

<?php

$error = "";
if (isset($_GET['status'])) {
	$status = $_GET['status'];
	if ($status) {
		$error = "Update failed";
	}
}


$dbname = 'project';  // your database name.
$con = mysqli_connect("localhost","root","", $dbname);

if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }


$result = mysqli_query($con, "SELECT * FROM messages where status = 'P'");

mysqli_close($con);
?>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title></title>
	<link  href="style.css" rel="stylesheet">
</head>

<body>
<div id="Mainpage">

<div id="header">
<?php include("header.php"); ?>
</div>

<div id="navigation">
<?php include("navigation.php"); ?>
</div>

<div id="content">
<?php

echo "<p align=\"center\">" . $error . "</p>";

echo " <br><br><br><br>

<table border='1'>
<tr>
<th>Name</th>
<th>Location</th>
<th>Messages</th>
<th>Approved</th>
<th>Rejected</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" .  $row['message'] . "</td>";
  
  echo "<td>";
  	echo "<form method=\"POST\" action=\"adminapprove.php?status=A&id=" . $row['id'] . "\">";
  	echo "<button type=\"submit\">Approve</button>";
  	echo "</form>";
  echo "</td>"; 
   echo "<td>";
  	echo "<form method=\"POST\" action=\"adminapprove.php?status=R&id=" . $row['id'] . "\">";
  	echo "<button type=\"submit\">Reject</button>";
  	echo "</form>";
  echo "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</form>";

?>

</div>

<div id="footer">
<?php include("footer.php"); ?>
</div>

</div>

</body>
</html>

			