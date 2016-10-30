<?php 
require_once('config.php');

$bookName=mysqli_real_escape_string($conn,$_POST['bookName']);
$intro=mysqli_real_escape_string($conn,$_POST['intro']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$publisher=mysqli_real_escape_string($conn,$_POST['publisher']);
$genre=mysqli_real_escape_string($conn,$_POST['genre']);
$pDate=mysqli_real_escape_string($conn,$_POST['pDate']);
$language=mysqli_real_escape_string($conn,$_POST['language']);
$price=mysqli_real_escape_string($conn,$_POST['price']);
$target_dir = "img/books/";//specify the file directory where the file going to be placed
$target_file = $target_dir.basename($_FILES['bookImage']['name']);//specify the path of the file to be uploaded
$tmp_name = $_FILES['bookImage']['tmp_name'];
move_uploaded_file($tmp_name, $target_file);

$sql="INSERT INTO books (bookName,introduction,author,publisher,genre,publishdate,language,price,image) VALUES ('$bookName','$intro','$author','$publisher','$genre','$pDate','$language','$price','$target_file')" ;
if($conn->query($sql)===TRUE){
	echo "<script>alert('New Book Has Succesfully Inserte!');window.location='adminbooklist.php'</script>";
}else{
	echo "Error: ".$sql. "<br>" .$conn->error;
}

 ?>