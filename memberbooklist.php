  <?php 
    include('memberheader.php');
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
          <th>Status</th>
          <th>Remaining date</th>
          <th>Function</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>10001</td>
          <td>First Last</td>
          <td>Abc</td>
          <td>Abc Publisher</td>
          <td>education</td>
          <td>Available</td><!-- available/borrowed -->
          <td>5days</td>
          <td>
  <div class="akh">
    <div class="nz">
      <a href="#docsModal1" data-toggle="modal" class="ce apn">
                  View
        </a><!--Edit the book-->
    </div>
  </div>
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