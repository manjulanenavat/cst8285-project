<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<html>
<body>
<ul>
<li><a href="index.php">Home</a></li>
</ul>

<ul>
<li><a href="greetings.php">Greetings</a></li>
</ul>
	
<?php

if (isset($_SESSION['admin'])) {
	echo "<ul><li><a href=\"logout.php\">logout</a></li></ul>";
} else {
	echo "<ul><li><a href=\"login.php\">login</a></li></ul>";
}
?>
</body>
</html>