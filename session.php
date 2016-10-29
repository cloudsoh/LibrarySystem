<?php 
require_once('config.php');
session_start();

$user_check=$_SESSION['username'];
$sql="SELECT * FROM login WHERE username='$user_check'";
$result=$conn->query($sql);
$count=$result->num_rows;
while($row=$result->fetch_assoc()){
	$login_user=$row['username'];
	$_SESSION['type']=$row['type'];	
}

if(!isset($_SESSION['username'])){
	header("location:index.php");
}
 ?>