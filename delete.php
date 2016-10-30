<?php 
require_once('config.php');
include('session.php');
$dltBookID=$_GET['bid'];

$sql="DELETE FROM books WHERE bookID = $dltBookID";
$deletefile="img/books/".$dltBookID.".jpg";
unlink($deletefile);
if($conn->query($sql)===TRUE){
	echo "<script>alert('Successfully Deleted.');window.location='adminbooklist.php'</script>";
}else{
	echo "<script>alert('Seem like some error to delete it.');window.location='adminbooklist.php'</script>";
}
//window.location='adminbooklist.php
$conn->close();
 ?>