<?php
require_once('config.php');

$username = mysqli_real_escape_string($conn, $_POST['html_username']);
$name = mysqli_real_escape_string($conn, $_POST['html_name']);
$password = mysqli_real_escape_string($conn, $_POST['html_password']);
$email = mysqli_real_escape_string($conn,$_POST['html_email']);
$gender = mysqli_real_escape_string($conn, $_POST['html_gender']);
$password = md5($password);

$sql = "INSERT INTO member(username, password,name, email,gender) VALUES ('$username', '$password','$name', '$email','$gender')";

if($conn->query($sql) === TRUE)
{
	echo "<script> alert('Sucessfully Registered!')</script>";
	echo "<script>window.location='index.php';</script>";
}
else
{
	echo "Error: " .$sql. "<br/>" .$conn->error;
}

$conn->close();
?>