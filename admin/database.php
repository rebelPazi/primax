<?php 

class Database{

	public $connect;
	public function __construct($host,$user,$pass,$dbname){
		$this->connect=mysqli_connect($host,$user,$pass,$dbname) or die("database connnection fail!".mysqli_connect_error());
	}
	public function ballo($table,$cols,$where){
		$sql="SELECT $cols FROM $table WHERE $where";
		$result=mysqli_query($this->connect,$sql);
		if(mysqli_num_rows($result)>0){
			$rows=mysqli_fetch_assoc($result);
			$_SESSION['user']=$rows['user_name'];
			return true;
		}else{
			return false;
		}

	}
}
$obj = new Database('localhost','root','','datatable');

 ?>