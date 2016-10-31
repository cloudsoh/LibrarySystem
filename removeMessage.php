<?php 
require_once('config.php');
include('session.php');
$deleteID=$_GET['id'];
// $id=$_SESSION['userid'];
$sql="DELETE FROM feedback WHERE id = $deleteID";
// echo $sql;
if($conn->query($sql)===TRUE){
	echo "<script>alert('Successfully Removed.');window.location='studentoverview.php'</script>";
}else{
	echo "<script>alert('Seem like some error to delete it.');</script>";
}
//window.location='adminbooklist.php
$conn->close();
 ?>