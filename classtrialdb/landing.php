<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
	<h1>Landing Page</h1>
	<a href="register.php">Register</a>
	<a href="login.php">login</a>

	<?php
	   if(isset($_SESSION["username"]))
	   {
		   echo"<a href='logout.php'>logout</a>";
	   }
	   else
	   {
		   echo"<a href='login.php'>login</a>";
	   }

	?>

</body>
</html>
