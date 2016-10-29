<?php
require_once('config.php');
session_start();
$username = mysqli_real_escape_string($conn, $_POST['html_username']);
$password = mysqli_real_escape_string($conn,$_POST['html_password']);
$password = md5($password);

$sql = "SELECT * FROM login WHERE username='$username' and password='$password' LIMIT 1";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
	$row=$result->fetch_assoc();
	$_SESSION['username'] = $username;
	echo $row['type'];
	echo gettype($row['type']);
	if($row['type']==1){
		header('location:studentoverview.php');
	}elseif($row['type']==2){
		header('location:adminoverview.php');
	}
	
	// header("Location: member.php");
}

else
{
	echo "<script> alert('Wrong username or password.')</script>";
	echo "<script>window.location='index.php';</script>";
}

$conn->close();
?>