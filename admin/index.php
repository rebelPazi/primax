<?php 
include ( "database.php");
ob_start();
session_start();
if(!$_SESSION['user']){
	header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome to member area</title>
</head>
<body>
	<span>Thank you for login&nbsp;&nbsp;<a href="login.php">logout</a></span>

</body>
</html>

 