<?php 
require_once('config.php');

$returnID=$_GET['bid'];
$sql="UPDATE books SET bName=NULL,bDate=NULL WHERE bookID=$returnID";
if($conn->query($sql)===TRUE){
	echo "<script>alert('Successfully Return!');</script>";
}else{
	echo "<script>alert('Seem some error to return book, redirect to booklist');</script>";
}
$sql="UPDATE notification SET status='1' WHERE bookID='$returnID'";
echo $sql;
if($conn->query($sql)===TRUE){
	echo "<script>window.location='adminbooklist.php'</script>";
}else{
	echo "<script>window.location='adminbooklist.php'</script>";
}
//window.location='adminbooklist.php'
 ?>