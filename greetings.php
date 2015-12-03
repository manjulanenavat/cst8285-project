<?php

$dbname = 'project';  // your database name.
$con = mysqli_connect("localhost","root","", $dbname);

if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }


$result = mysqli_query($con, "SELECT * FROM messages where status = 'A'");

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to greetings Page</title>
<meta charset="ISO-8859-1">
<link  href="style.css" rel="stylesheet">
<script>

function validateForm()
{
		alert("tttt");	
  	var message=document.forms["myform"]["message"].value;
  	
	if (message==null || message=="")
	 	{
  		alert("Mandatory");
  		return false;
  		}

</script>
</head>
<body> 

<div id="header">
<?php include("header.php"); ?>
</div>
<div id="navigation">
<?php include("navigation.php"); ?>
</div>
<div id="content">
<form name="myform" action="insert-greetings.php" method="post" onsubmit="return validateForm()">

 	<table id="contenttable">
	<tbody id="tablebody">
		<tr>
			<td id="tablebodyleft">Name</td>
			<td id="tablebodyright">
			<input type="text" name="name" style="width: 251px"></td>
		</tr>
		<tr>
			<td id="tablebodyleft">Location(City/Province)</td>
			<td id="tablebodyright">
			<input type="text" name="location" style="width: 251px"></td>
		</tr>
		<tr>
			<td id="tablebodyleft">Message * </td>
			<td id="tablebodyright">
			<textarea rows="5" cols="45" name="message"> </textarea>
			</td>
		</tr>
	
		<tr id="btn">
			<td colspan="2"><input type="submit" value="submit"></td>
		</tr>
		</tbody>
	</table>
</form>
<?php


echo " <br><br><br><br>

<table border='1'>
<tr>
<th>Name</th>
<th>Location</th>
<th>Messages</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" .  $row['message'] . "</td>";
  
 }
echo "</table>";

?>


</div>
<div id="footer"><?php include("footer.php"); ?></div>
</body>
</html>
