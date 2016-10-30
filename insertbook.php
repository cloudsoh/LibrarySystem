<?php 
require_once('config.php');

$bookName=mysqli_real_escape_string($conn,$_POST['bookName']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$publisher=mysqli_real_escape_string($conn,$_POST['publisher']);
$genre=mysqli_real_escape_string($conn,$_POST['genre']);
 ?>