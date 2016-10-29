  <?php 
    include('studentheader.php');
  ?>
  <script>
var lastSearch = "";
function showResult(str,page) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    // return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      // document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  var i = 1;
  lastSearch = str;
  if(page==null){
    page=1;
  }
  xmlhttp.open("GET","livesearch.php?q="+str+"&page="+page,true);
  xmlhttp.send();
}
$(document).ready(function(){
$("a").click(function(){
    i=$(this).data("value");
    showResult(lastSearch,i);
  })
})
</script>
<body onload="showResult('')">

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
      <input type="text" class="form-control aqr" placeholder="Search books" onkeyup="showResult(this.value)" autofocus>
      <span class="bv adn"></span><!--search the book from the name/code/author/publisher/genre -->
    </div>
  </div>
</div>
<div class="ud">
  <div class="eg">
    <table class="cl" data-sort="table">
      
      <tbody>
      <span id="livesearch">
      </span>

      </tbody>
    </table>
</div>
  </div>
</div>
<div class="db">
  <ul class="ow">
<?php 
$sql = "SELECT * FROM books"; 
$num_rec_per_page=5;//numbers of elemenet u wan in page
$result = $conn->query($sql); //run the query
$total_records = $result->num_rows;  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); //get smallest integer after integer

echo "<li><a href='#' data-value='1'>".'First'."</a></li> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<li><a href='#' data-value='$i'>".$i."</a></li> "; 
}; 
echo "<li><a href='#' data-value='$total_pages'>".'Last'."</a></li></div> "; // Goto last page
?>

    <!-- <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li> -->
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
