<?php
require_once('config.php');
session_start();

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0

if(strlen($q)>=0)
{
	$q = mysqli_escape_string($conn, $q);
	$sql = "SELECT * FROM task WHERE name LIKE '%$q%' LIMIT 10";

	$result = $conn->query($sql);

	$hints = array();

	$tabletop="
	

	
	<table class='table table-striped'>
		<thead>
			<caption>To-Do List</caption>
		</thead>
		<tbody>
			<tr>
				<th>Id</th>
				<th>Task</th>
				<th>Description</th>
				<th>Priority</th>
				<th>Date</th>
				<th>Time</th>
				
				<!-- <th></th> -->
				<th></th>
			</tr>";
			array_push($hints,$tabletop);
	$no = 1;
	while($rows = $result->fetch_assoc())
	{
		$name = $rows['name'];
		
		//$id = $rows['id'];
	$hint = " <tr>

	
				<td>".$no."</td>
				<td>" . $rows['name']."</td>
				<td>" . $rows['description'] ." </td>
				<td>" . $rows['priority']."</td>
				<td>" . $rows['taskdate']." </td>
				<td>" . $rows['time'] ." </td>
				
				
				<td class='text-center'>
				<button class='btn btn-primary' data-toggle='modal' data-target='#task-form-modal2' data-tid='".$rows['taskid']."' data-name='".$rows['name']."' data-priority='".$rows['priority']."' data-taskdate='".$rows['taskdate']."' data-time='".$rows['time']."' data-description='" . $rows['description']. " '
				
				><span class='fa fa-pencil-square-o'></span>&nbsp; <span class='hidden-xs'>Edit</span></button>
               	<a href='delete.php?id=" . $rows['taskid'] ." ' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this?')\"><span class='glyphicon glyphicon-remove'></span>&nbsp; <span class='hidden-xs'>Delete</span></a>
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
