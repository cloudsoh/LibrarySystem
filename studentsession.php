<?php 
require_once('config.php');

$type_check=$_SESSION['type'];
if($type_check==1){
	$username = $_SESSION['username'];
	$sql="SELECT * FROM students WHERE username='$username'";
	$result=$conn->query($sql);
	// echo $sql;
	$row=$result->fetch_assoc();
	$_SESSION['userid']=$row['id'];
}else{
	echo "<script>window.history.back();</script>";
}
 ?>