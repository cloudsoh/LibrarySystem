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
		
		if(isset($rows['lenderID'])){
			$temp="OUT";
		}else{
			$temp="AVAILABLE";
		}
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
      <a href='#docsModal1' data-toggle='modal' class='ce apn'>
                  View
        </a><!--Edit the book-->
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
