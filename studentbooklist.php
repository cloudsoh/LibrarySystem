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
    xmlhttp.open("GET","studentlivesearch.php?q="+str+"&page="+page,true);
    xmlhttp.send();
  }
  $(document).ready(function(){
  $("a").click(function(){
      i=$(this).data("value");
      showResult(lastSearch,i);
    })
  });
  $(document).ready(function(){
    $('#task-form-modal2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);; // Button that triggered the modal
      var name = button.data('name'); // Extract info from data-* attributes
      var image = button.data('image');
      var introduction = button.data('introduction');

      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('.modal-title').text(name);
      // modal.find('.modal-body input').val(recipient);
      modal.find('.modal-body #task').attr("value",name);
    
      switch(priority){
        case "High": modal.find('.modal-body #high').attr("selected","selected");break;
        case "Normal": modal.find('.modal-body #normal').attr("selected","selected");break;
        case "Low": modal.find('.modal-body #low').attr("selected","selected");break;
      }
      modal.find('.modal-body #date').attr("value",taskdate);
      modal.find('.modal-body #time').attr("value",time);
      modal.find('.modal-body #tid').attr("value",tid);
      modal.find('.modal-body #description').attr("value",description);
      // modal.find('.modal-body .mbirthday').html(birthday);
      // modal.find('.modal-body .mcompany').html(company);
    }); 
    
    
    // $('#search').val('');
  });

</script>
<body onload="showResult('')">

 <div class="hc aps">
        <div class="apa">
  <div class="apb">
    <h6 class="apd">Student</h6>
    <h2 class="apc">Booklist</h2>
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

    
    <div id="docsModal1" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="ri">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="rj">
        <button type="submit" class="ce apo" data-dismiss="modal">Borrow</button>
        <button type="button" class="ce apo" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
