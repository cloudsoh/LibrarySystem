  <?php 
    include('adminheader.php');
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
    xmlhttp.open("GET","adminlivesearch.php?q="+str+"&page="+page,true);
    xmlhttp.send();
  }
  $(document).ready(function(){
  $("a").click(function(){
      i=$(this).data("value");
      showResult(lastSearch,i);
    })
  });
  $(document).ready(function(){
    $('#docsModal3').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var bid = button.data('bid'); // Extract info from data-* attributes
      var name = button.data('name');
      var author = button.data('author');
      var publisher = button.data('publisher');
      var genre = button.data('genre');
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('.modal-body #bookID').attr("value",bid);
      modal.find('.modal-body #bookName').attr("value",name);
      modal.find('.modal-body #author').attr("value",author);
      modal.find('.modal-body #publisher').attr("value",publisher);
      modal.find('.modal-body #genre').attr("value",genre);
      // switch(priority){
      //   case "High": modal.find('.modal-body #high').attr("selected","selected");break;
      //   case "Normal": modal.find('.modal-body #normal').attr("selected","selected");break;
      //   case "Low": modal.find('.modal-body #low').attr("selected","selected");break;
      // }
      // modal.find('.modal-body #date').attr("value",taskdate);
      // modal.find('.modal-body #time').attr("value",time);
      // modal.find('.modal-body #tid').attr("value",tid);
      // modal.find('.modal-body #description').attr("value",description);
      // modal.find('.modal-body .mbirthday').html(birthday);
      // modal.find('.modal-body .mcompany').html(company);
    }); 

    // $('#search').val('');
  });
  $(document).ready(function(){
    $('#docsModal1').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var bid = button.data('bid');
      var image = button.data('image');
      var lenderID = button.data('lid');
      var modal = $(this);
      promptout(lenderID);
      if(lenderID==''){
        modal.find('rj #borrow').removeClass('disabled');
      }else{
        modal.find('.rj #borrow').addClass('disabled');
      }
      modal.find('.modal-body img').attr("src",image);
      modal.find('.modal-body #bookID').attr("value",bid);
      modal.find('.modal-body #lenderID').attr("value",lenderID);
      modal.find('.rj #return').attr("href","return.php?bid="+bid);
    });
  });
  function promptout(str){
    alert(str);
  }
</script>
<body onload="showResult('')">
 <div class="hc aps">
        <div class="apa">
  <div class="apb">
    <h6 class="apd">Admin</h6>
    <h2 class="apc">Booklist</h2>
  </div>
</div>

<div class="akg ue">
  <div class="akh aki">
    <div class="tn aol">
      <input type="text" class="form-control aqr" placeholder="Search books" onkeyup="showResult(this.value)" autofocus>
      <span class="bv"><span class="fa fa-search"></span></span><!--search the book from the name/code/author/publisher/genre -->
    </div>
  </div>
  <div class="akh">
    <div class="nz">
        <a href="#docsModal2" data-toggle="modal" class="ce apn">
                  Add
        </a>
    </div>
  </div>
</div>
<div class="ud">
  <div class="eg">  
    <span id="livesearch"></span>
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
        <form class="form-horizontal" method="POST" action="" id="borrow-form" name="borrow-form">
          <img src="" alt="NO IMAGE" width="100%">
          <div class="form-group">
            <label for="bookID" class="control-label col-md-2">Book code: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="bookID" name="bookID" value="" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="lenderID" class="control-label col-md-2">LenderID: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="lenderID" name="lenderID" value="">
            </div>
          </div>
        </form>
      </div>
      <div class="rj">
        <button type="submit" id="borrow" class="ce apo" form="borrowborrow-form">Borrow</button>
        <a href="" id="return" class="ce apo">Return</a>
        <button type="button" class="ce apo" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!--Insert New Book Use-->
    <div id="docsModal2" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="ri">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Insert Book detail</h4>
      </div>
      <div class="modal-body"><!-- Insert Body -->
        <form class="form-horizontal" method="POST" action="insertbook.php" id="insert-form" name="insert-form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="bookName" class="control-label col-md-2">Book Name: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="bookName" name="bookName" placeholder="Book Name" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="intro" class="control-label col-md-2">Introduction: </label>
            <div class="col-md-10">
              <textarea class="form-control" id="intro" name="intro" placeholder="Introduction" value="" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="author" class="control-label col-md-2">Author: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="author" name="author" placeholder="Author" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="publisher" class="control-label col-md-2">Publisher: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="publisher" name="publisher" placeholder="Publisher" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="genre" class="control-label col-md-2">Genre: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="genre" id="genre" placeholder="genre" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="pDate" class="control-label col-md-2">Publish Date:</label>
            <div class="col-md-10">
              <input class="form-control" type="date" id="pDate" name="pDate" required>
            </div>
          </div>
          <div class="form-group">
            <label for="language" class="control-label col-md-2">Language:</label>
            <div class="col-md-10">
              <select class="form-control" name="language" id="language" required>
                <option value="1">English</option>
                  <option value="2">Mandarin</option>
                  <option value="3">Bahasa Melayu</option>
                  <option value="4">Hindi</option>
                  <option value="5">Japanese</option>
                  <option value="6">Filipino</option>
                  <option value="7">Cantonese</option>
                  <option value="8">Russian</option>
                  <option value="9">Korean</option>
                  <option value="10">Vietnamese</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="price" class="control-label col-md-2">Price: </label>
            <div class="col-md-10">
              <input class="form-control" type="number" step="0.01" id="price" name="price" required>
            </div>
          </div>
          <div class="form-group">
            <label for="image" class="control-label col-md-2">Image: </label>
            <div class="col-md-10">
              <input class="form-control" type="file" id="bookImage" name="bookImage">
            </div>
          </div>
        </form><!-- could be upload image -->
      </div>
      <div class="rj">
        <button type="submit" class="ce apn" form="insert-form">Save Change</button>
        <button type="button" class="ce apn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Edit Use Modal-->
    <div id="docsModal3" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="ri">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Book detail</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="" id="edit-form" name="edit-form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="bookID" class="control-label col-md-2">Book code: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="bookID" name="bookID" value="" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="bookName" class="control-label col-md-2">Book Name: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="bookName" name="bookName" placeholder="Book Name" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="author" class="control-label col-md-2">Author: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="author" name="author" placeholder="Author" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="publisher" class="control-label col-md-2">Publisher: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="publisher" name="publisher" placeholder="Publisher" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="genre" class="control-label col-md-2">Genre: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="genre" id="genre" placeholder="genre" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="image" class="control-label col-md-2">Image: </label>
            <div class="col-md-10">
              <input class="form-control" type="file" id="bookImage" name="bookImage">
            </div>
          </div>
        </form>
      </div>
      <div class="rj">
        <button type="submit" class="ce apn" form="edit-form">Save Change</button>
        <button type="button" class="ce apn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>