<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html >
  	<head>
    	<meta charset="UTF-8">
    	<title>Admin Login Page</title>
    	<link rel="stylesheet" href="css/style.css">
 	</head>

  	<body>

    <div class="wrapper">
		<div class="container">
			<h1>Welcome_0_</h1>
			
			
			<form class="form" action="member.php" method="post">
				<input type="text" name="user" placeholder="UserName">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" name="submit" value="Sign-in">
				<?php 
					echo(isset($_SESSION['message']))?$_SESSION['message']:null;
					unset($_SESSION['message']);
				?>
			</form>
		</div>
	
		<ul class="bg-bubbles">

			<li>10</li>
			<li>20</li>
			<li>30</li>
			<li>40</li>
			<li>50</li>
		
		</ul>
	</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>
 </body>
</html>

