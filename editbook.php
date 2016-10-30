<?php 
require_once('config.php');

$bookID=mysqli_real_escape_string($conn,$_POST['bookID']);
$bookName=mysqli_real_escape_string($conn,$_POST['bookName']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$publisher=mysqli_real_escape_string($conn,$_POST['publisher']);
$genre=mysqli_real_escape_string($conn,$_POST['genre']);
//upload image
$target_dir = "img/books/";//specify the file directory where the file going to be placed
$target_file = $target_dir.basename($_FILES['bookImage']['name']);//specify the path of the file to be uploaded
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// echo $imageFileType;
// Allow certain file formats
// Check if image file is a actual image or fake image
$tmp_name = $_FILES['bookImage']['tmp_name'];    
// echo $tmp_name;
if($tmp_name==null){
	$check = false;
}else{
	$check = getimagesize($tmp_name);
}
if($_FILES['bookImage']['name']!=""){
    if($check !== false) {
    	if($imageFileType != "jpg") {
		    // echo "Sorry, only JPG is allowed.";
		    echo "<script>alert('Sorry, only JPG is allowed.');</script>";
		    $uploadOk = 0;
		}else{
	        // echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    }

    } else {
         echo "<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }
}else{
	$uploadOk=1;
}


$imagetype= $_FILES["bookImage"]["type"];

$sql="UPDATE books SET bookName='$bookName',author='$author',publisher='$publisher' WHERE bookID='$bookID'";
if($uploadOk==1){
	if($conn->query($sql)===TRUE){
		// echo $last_id;
		if ($uploadOk == 0) {
		    echo "<script>alert('Sorry your file was not uploaded.');</script>";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($tmp_name, "img/books/".$bookID.".".$imageFileType)) {
		        // echo "The file ". basename( $_FILES["bookImage"]["name"]). " has been uploaded.";
		        echo "<script>alert('Book Detail has Succesfully Edit!');window.location.href='adminbooklist.php';</script>";
		        // window.location.href='adminbooklist.php';
				move_uploaded_file($tmp_name, $target_file);
		    } else {
		        echo "<script>alert('Book Detail has Succesfully Edit!');window.location.href='adminbooklist.php';</script>";
		        // 
		    }
		}
		
		
		// 	echo "SUCCESS";
		//'
	}else{
		echo "Error: ".$sql. "<br>" .$conn->error;
	}
}else{
	echo "<script>alert('Sorry your file was not uploaded.');window.location.href='adminbooklist.php';</script>";
	// window.location.href='adminbooklist.php';
}
$conn->close();
?>