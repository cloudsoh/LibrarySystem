<?php 
require_once('config.php');

$bookID=mysqli_real_escape_string($conn,$_POST['bookID']);
$bookName=mysqli_real_escape_string($conn,$_POST['bookName']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$publisher=mysqli_real_escape_string($conn,$_POST['publisher']);
$genre=mysqli_real_escape_string($conn,$_POST['genre']);
$target_dir = "img/books/";//specify the file directory where the file going to be placed
$target_file = $target_dir.basename($_FILES['bookImage']['name']);//specify the path of the file to be uploaded
$tmp_name = $_FILES['bookImage']['tmp_name'];
move_uploaded_file($tmp_name, $target_file);

$sql="UPDATE books SET "