<?php 
include("database.php");
ob_start();
session_start();
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	 $password=sha1($password);
		if($obj->ballo("admin","*","user_name='$user'AND password='$password' AND status='1'")){
			header("location:index.php");
		}else{
			$_SESSION['message']="Invalid UserName or Password";
			header("location:login.php");
		}
		
}else{
	header("location:login.php");
}


?>

 