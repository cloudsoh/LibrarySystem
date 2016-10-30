<?php 
require_once('config.php');

$type_check=$_SESSION['type'];
if($type_check==1){
	$sql="SELECT * FROM students";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$_SESSION['userid']=$row['id'];
}else{
	echo "<script>window.history.back();</script>";
}
 ?>