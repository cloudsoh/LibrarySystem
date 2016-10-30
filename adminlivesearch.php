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
	$sql = "SELECT * FROM books WHERE bookID LIKE '%$q%' OR bookName LIKE '%$q%' OR author LIKE '%$q%' OR publisher LIKE '%$q%' LIMIT $start_from, $num_rec_per_page";

	$result = $conn->query($sql);

	$hints = array();

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
          <th>Borrower</th>
          <th>Borrow Date</th>
          <th>Function</th>
        </tr>
      </thead>
      <tbody>";
			array_push($hints,$tabletop);
	$no = 1;
	while($rows = $result->fetch_assoc())
	{
		
    $image=$rows['image'];
    if(!isset($rows['image'])){
        $image="img/books/noimg.png";
    }
		//$id = $rows['id'];
	$hint = " <tr>
          <td>".$no."</td>
          <td>".$rows['bookID']."</td>
          <td>".$rows['bookName']."</td>
          <td>".$rows['author']."</td>
          <td>".$rows['publisher']."</td>
          <td>".$rows['lenderID']."</td><!-- available/borrowed -->
          <td>".$rows['lenderDate']."</td>
          <td>
  <div class='akh'>
    <div class='nz'>
      <button data-target='#docsModal3' class='ce apn' data-toggle='modal' data-bid='".$rows['bookID']."' data-name='".$rows['bookName']."' data-author='".$rows['author']."' data-publisher='".$rows['publisher']."' data-genre='".$rows['genre']."'>Edit</button>
      <button class='ce apn' data-target='#docsModal1' data-toggle='modal' data-bid='".$rows['bookID']."' data-image='".$image."' data-lid='".$rows['lenderID']."'>Borrow</button>
      <a href='delete.php?bid=".$rows['bookID']."' class='ce apn'>
            Delete
      </a>  
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
