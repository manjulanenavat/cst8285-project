<?php
if (isset($_GET['failed'])) {
	$error = 'Login Failed!';
}
?>

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
<form action="loginvalidate.php" method="post">

<?php
	if(isset($error) && !empty($error)) {
?>

<span class="error"><?= $error; ?></span><br>

<?php
	}
?>

Username: <input type="text" id="userid" name="username">
Password: <input type="text" id="passwd" name="password">
<input type="submit" value="login">
</form>
</div>

<div id="footer">
<?php include("footer.php"); ?>
</div>

</div>

</body>
</html>
