<?php
require_once('config.php');
date_default_timezone_set("Asia/Singapore");//set timezone
$currenttime=date("Y-m-d H:i:s");
echo $currenttime;
// $DTcurrenttime=DateTime::createFromFormat('Y-m-d H:i:sa', $currenttime);

$message=$_POST['message'];
$sql = "INSERT INTO feedback(content,date) VALUES ('$message','$currenttime')";
if($conn->query($sql)===TRUE){
	echo "<script>alert('Feedback Successfully Submitted!!');window.location.href='index.php';</script>";
}else{
	echo "Error: ".$sql. "<br>" .$conn->error;
	echo "<script>alert('Fail submit!!');</script>";
}
