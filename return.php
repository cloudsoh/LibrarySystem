<?php 
require_once('config.php');

$returnId=$_GET['bid'];
$sql="UPDATE books SET bName=NULL,bDate=NULL WHERE bookID=$returnId";
if($conn->query($sql)===TRUE){
	echo "<script>alert('Successfully Return!');window.location='adminbooklist.php'</script>";
}else{
	echo "<script>alert('Seem some error to return book, redirect to booklist');window.location='adminbooklist.php'</script>";
}

 ?>