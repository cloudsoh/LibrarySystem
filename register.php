<?php
require_once('config.php');

session_start();
$username = mysqli_real_escape_string($conn, $_POST['html_username']);
$name = mysqli_real_escape_string($conn, $_POST['html_name']);
$password = mysqli_real_escape_string($conn, $_POST['html_password']);
$email = mysqli_real_escape_string($conn,$_POST['html_email']);
$gender = mysqli_real_escape_string($conn, $_POST['html_gender']);
$password = md5($password);

$selectsql = "SELECT * FROM login WHERE username='$username'";
$result=$conn->query($selectsql);
if($result->num_rows==0){
	if($gender==='Male'){
		$gender=1;
	}else{
		$gender=2;
	}

	$sql = "INSERT INTO login(username, password, type) VALUES ('$username', '$password', '1');";
	$sql .= "INSERT INTO students(name, username, email, gender) VALUES ('$name', '$username', '$email','$gender')";

	if ($conn->multi_query($sql)===TRUE) {
	    echo "DONE";
	    
	    $_SESSION['flash']="a";
	    header("location:index.php");
	}else{
		echo "ERROR";
		echo "location:index.php";
	}
}else{
	
	$_SESSION['flash']="b";
	header("location:index.php");
}

?>