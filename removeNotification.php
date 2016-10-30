<?php 
require_once('config.php');
include('session.php');
$dltBookID=$_GET['bid'];
$id=$_SESSION['userid'];
$sql="DELETE FROM notification WHERE bookID = $dltBookID AND id=$id";
// echo $sql;
if($conn->query($sql)===TRUE){
	echo "<script>alert('Successfully Removed.');window.location='studentoverview.php'</script>";
}else{
	echo "<script>alert('Seem like some error to delete it.');window.location='studentoverview.php'</script>";
}
//window.location='adminbooklist.php
$conn->close();
 ?>