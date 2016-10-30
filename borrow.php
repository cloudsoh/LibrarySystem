<?php 
require_once('config.php');

$bookID=mysqli_real_escape_string($conn,$_POST['bookID']);
$lenderID=mysqli_real_escape_string($conn,$_POST['lenderID']);
date_default_timezone_set("Asia/Singapore");
$currenttime=date("Y-m-d H:i:s");

$sql="UPDATE books SET lenderID='$lenderID', lenderDate='$currenttime' WHERE bookID=$bookID";
if($conn->query($sql)===TRUE){
	echo "<script>alert('Succesfully Borrowe!');window.location='adminbooklist.php'</script>";
}else{
	echo "<script>alert('Seem some error to borrow book, redirect to booklist');window.location='adminbooklist.php'</script>";
}

 ?>