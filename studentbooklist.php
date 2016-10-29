  <?php 
    include('studentheader.php');
  ?>
 <div class="hc aps">
        <div class="apa">
  <div class="apb">
    <h6 class="apd">Student</h6>
    <h2 class="apc">Booklist</h2>
  </div>

  <div class="ob ape">
    <div class="tn aol">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="bv wt"></span><!--search the book from the insert date-->
    </div>
  </div>
</div>

<div class="akg ue">
  <div class="akh aki">
    <div class="tn aol">
      <input type="text" class="form-control aqr" placeholder="Search books">
      <span class="bv adn"></span><!--search the book from the name/code/author/publisher/genre -->
    </div>
  </div>
</div>
<div class="ud">
  <div class="eg">
    <table class="cl" data-sort="table">
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
      <tbody>
        <?php
        $num_rec_per_page=5;//numbers of elemenet u wan in page
        include('config.php');
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; //set default element 0
        $start_from = ($page-1) * $num_rec_per_page;//set which element start from
        $sql = "SELECT * FROM books LIMIT $start_from, $num_rec_per_page"; 

        $result = $conn->query($sql); //run the query
        // echo $sql;
        $no=$start_from+1;//set No.
        if($result->num_rows>0){
        while($rows = $result->fetch_assoc()){
        ?> 
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $rows['bookID'];?></td>
          <td><?php echo $rows['bookName'];?></td>
          <td><?php echo $rows['author'];?></td>
          <td><?php echo $rows['publisher'];?></td>
          <td><?php echo $rows['genre'];?></td>
          <td><?php echo $rows['publishdate'];?></td><!-- available/borrowed -->
          <td><?php if(isset($rows['lenderID'])){
           echo "OUT";}else{ echo "AVAILABLE";}?></td>
          <td>
  <div class="akh">
    <div class="nz">
      <a href="#docsModal1" data-toggle="modal" class="ce apn">
                  View
        </a><!--Edit the book-->
    </div>

  </div>
  <?php $no++;}}else{echo "ERROR";}?>
</div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="db">
  <ul class="ow">
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li><!-- using php calculate how many book in 1 page and could put how many pages -->
  </ul>
</div>

      </div>
    </div>
  </div>
    <div id="docsModal1" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="ri">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Book Detail</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="" id="task-form" name="task-form">
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Book code: </label>
            <div class="col-md-10">
              <!-- Php echo that book details -->
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Book Name: </label>
            <div class="col-md-10">
             
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Author: </label>
            <div class="col-md-10">
              
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Publisher: </label>
            <div class="col-md-10">
              
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Genre: </label>
            <div class="col-md-10">
           
            </div>
          </div>
        </form>
      </div>
      <div class="rj">
        <button type="submit" class="ce apo" data-dismiss="modal">
                  Borrow
        </a>
        <button type="button" class="ce apo" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
$num_rec_per_page=5;//numbers of elemenet u wan in page

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; //set default element 0
$start_from = ($page-1) * $num_rec_per_page;//set which element start from
$sql = "SELECT * FROM books LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
$no=$start_from+1;//set No.
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
           <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $row['bookID'];?></td>
              <td><a href="details.php?details=<?php echo $row['bookID']?>"><?php echo $row['bookName'];?></a></td>
              <td><?php echo $row['author'];?></td>
              <td><?php echo $row['publisher'];?></td>
              <td><?php echo $row['genre'];?></td>
            </tr>
<?php 
$no++;}; 
?> 
</tbody>
</table>
</div>
<?php 
$sql = "SELECT * FROM books"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); //get smallest integer after integer

echo "<div style='float:right'><a href='list.php?page=1'>".'First'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='list.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='list.php?page=$total_pages'>".'Last'."</a></div> "; // Goto last page
?>