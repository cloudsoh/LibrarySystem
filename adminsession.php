<?php 
require_once('config.php');
session_start();

$type_check=$_SESSION['type'];
if($type_check==2){

}else{
	echo "<script>window.history.back();</script>";
}
 ?>