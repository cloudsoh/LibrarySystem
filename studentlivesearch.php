<?php
require_once('config.php');
session_start();

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0

if(strlen($q)>=0)
{
	$q = mysqli_escape_string($conn, $q);
	$num_rec_per_page=5;//numbers of elemenet u wan in page
    include('config.php');
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; //set default element 0
    $start_from = ($page-1) * $num_rec_per_page;//set which element start from
	$sql = "SELECT * FROM books WHERE bookID LIKE '%$q%' OR bookName LIKE '%$q%' OR author LIKE '%$q%' OR publisher LIKE '%$q%' OR genre LIKE '%$q%' LIMIT $start_from, $num_rec_per_page";

	$result = $conn->query($sql);
	$hints = array();
  if(isset($_GET['bID'])){
    // echo "HI BID";
    
    $id=$_SESSION['userid'];
    $bookID=$_GET['bID'];
    $notifysql="INSERT INTO notification (id,bookID) VALUES ($id,$bookID)";
    if ($conn->query($notifysql) === TRUE) {
       
    }
  }
	$tabletop="
	<div class='ud'>
  <div class='eg'>
	<table class='cl' data-sort='table'>
      <thead>
        <tr>
          <th>No.</th>
          <th>Book code</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Genre</th>
          <th>Publish Date</th>
          <th>Status</th>
          <th>Function</th>
        </tr>
      </thead>
      <tbody>";
			array_push($hints,$tabletop);
	$no = 1;
	while($rows = $result->fetch_assoc())
	{
		
		if(isset($rows['bName'])){
      $checksql = "SELECT * FROM notification WHERE id='".$_SESSION['userid']."' AND bookID='".$rows['bookID']."'";
      $checkresult = $conn->query($checksql);
      if ($checkresult->num_rows > 0) {
      // output data of each row
      while($row = $checkresult->fetch_assoc()) {
          $temp="<button class='btn btn-danger' >REQUESTED</button>";
      }
      } else {
            $temp="<button class='btn btn-danger' id='notify' value='".$rows['bookID']."' data-value='".$rows['bookID']."' onclick='recordNotify(this.value)'>NOTIFY ME</button>";
      }
      // echo $checksql;
			
		}else{
			$temp="<button class='btn btn-success' disabled>AVAILABLE</button>";
		}
    $image="img/books/";
    $image.=$rows['bookID'];
    $image.=".jpg";
    // $image=$rows['image'];
    // if(!isset($rows['image'])){
    //     $image="img/books/noimg.png";
    // }
		//$id = $rows['id'];
	$hint = " <tr>
          <td>".$no."</td>
          <td>".$rows['bookID']."</td>
          <td>".$rows['bookName']."</td>
          <td>".$rows['author']."</td>
          <td>".$rows['publisher']."</td>
          <td>".$rows['genre']."</td>
          <td>".$rows['publishdate']."</td><!-- available/borrowed -->
          <td>".$temp."</td>
          <td>
  <div class='akh'>
    <div class='nz'>
      <button data-target='#docsModal1' class='ce apn' data-toggle='modal' data-name='".$rows['bookName']."' data-image='".$image."' data-introduction='".$rows['introduction']."' >View</button>
  </div>
  </div>
  </td>
  </tr>
	";
	$no++;
		array_push($hints, $hint);
	}
	$tablebtm="	</tbody>
	</table>
	";
	array_push($hints,$tablebtm);
}

//Set output to "no suggestion" if no hint was found
if(empty($hints))
{
	$response="no suggestion";
}
else
{
	$response=join('</tr>', $hints);
}
//output the response
echo $response;
?>
