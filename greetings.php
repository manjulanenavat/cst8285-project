
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


</div>
<div id="footer"><?php include("footer.php"); ?></div>
</body>
</html>
