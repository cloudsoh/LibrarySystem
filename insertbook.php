<?php 
require_once('config.php');

$bookName=mysqli_real_escape_string($conn,$_POST['bookName']);
$intro=mysqli_real_escape_string($conn,$_POST['intro']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$publisher=mysqli_real_escape_string($conn,$_POST['publisher']);
$genre=mysqli_real_escape_string($conn,$_POST['genre']);
$pDate=mysqli_real_escape_string($conn,$_POST['pDate']);
$language=mysqli_real_escape_string($conn,$_POST['language']);
$price=mysqli_real_escape_string($conn,$_POST['price']);

//upload image
$target_dir = "img/books/";//specify the file directory where the file going to be placed
$target_file = $target_dir.basename($_FILES['bookImage']['name']);//specify the path of the file to be uploaded
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Allow certain file formats

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["bookImage"]["tmp_name"]);
    if($check !== false) {
    	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}else{
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    }

    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
$tmp_name = $_FILES['bookImage']['tmp_name'];    

$imagetype= $_FILES["bookImage"]["type"];

$sql="INSERT INTO books (bookName,introduction,author,publisher,genre,publishdate,language,price,image) VALUES ('$bookName','$intro','$author','$publisher','$genre','$pDate','$language','$price','$imagetype')" ;
echo $sql;
if($conn->query($sql)===TRUE){
	$last_id = $conn->insert_id;
	echo $last_id;
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($tmp_name, "img/books/".$last_id.".".$imageFileType)) {
	        echo "The file ". basename( $_FILES["bookImage"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	move_uploaded_file($tmp_name, $target_file);
	echo "<script>alert('New Book Has Succesfully Insert!');
	
	</script>";
	echo "SUCCESS";
}else{
	echo "Error: ".$sql. "<br>" .$conn->error;
}


 ?>