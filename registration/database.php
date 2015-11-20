<?php

class Database{
	private $connect;
	public function __construct($host,$user,$pass,$db){
		$this->connect=mysqli_connect($host,$user,$pass,$db) or die("Database not connected!".mysqli_connect_error());
		//echo"database connection is successfully";
	}
	public function Insert($table,$cols){
		$sql="INSERT INTO $table SET $cols";
		$result=mysqli_query($this->connect,$sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
}
$obj = new Database("localhost","root","","registration");