<?php 
require_once('config.php');

$dltBookID=$_GET['bid'];

$sql="DELETE FROM books WHERE bookID = $dltBookID";
if($conn->query($sql)===TRUE){
	echo "<script>alert('Successfully Deleted.');window.location='adminbooklist.php';</script>";
}else{
	echo "<script>alert('Seem like some error to delete it.');window.location='adminbooklist.php';</scrpit>";
}

$conn->close();
 ?>