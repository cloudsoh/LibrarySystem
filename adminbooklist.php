  <?php 
    include('adminheader.php');
  ?>
 <div class="hc aps">
        <div class="apa">
  <div class="apb">
    <h6 class="apd">Admin</h6>
    <h2 class="apc">Booklist</h2>
  </div>

  <div class="ob ape">
    <div class="tn aol">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="bv wt"></span><!--search the book from the insert date     -->
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
    <table class="cl" data-sort="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Book code</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Genre</th>
          <th>Borrower</th>
          <th>Reg_date</th>
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
          <td>Ali</td>
          <td>2016-09-10</td>
          <td>
  <div class="akh">
    <div class="nz">
      <a href="#docsModal1" data-toggle="modal" class="ce apn">
                  View
        </a><!--Edit the book-->
      <button type="button" class="ce apn">
        Delete
      </button><!-- Delete the book -->
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
        <a href="#docsModal3" data-toggle="modal" class="ce apo" data-dismiss="modal">
                  Edit
        </a>
        <button type="button" class="ce apo" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <form name="form" method="POST" action="xxx.php">
    <div id="docsModal2" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="ri">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Insert Book detail</h4>
      </div>
      <div class="modal-body"><!-- Insert Body -->
        <form class="form-horizontal" method="POST" action="" id="task-form" name="task-form">
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Book code: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Book Name: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Author: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Publisher: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Genre: </label>
            <div class="col-md-10">
              <select id="xxx" name="xxx" class="form-control" required>
                <option>Education</option>
                <option>Mystery</option>
                <option>Health</option>
              </select>
            </div>
          </div>
        </form><!-- could be upload image -->
      </div>
      <div class="rj">
        <button type="submit" class="ce apn">Save Change</button>
        <button type="button" class="ce apn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>
  <form name="form" method="POST" action="xxx.php">
    <div id="docsModal3" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="ri">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Book detail</h4>
      </div>
      <div class="modal-body"><!-- Edit Body -->
        <form class="form-horizontal" method="POST" action="" id="task-form" name="task-form">
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Book code: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Book Name: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Author: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Publisher: </label>
            <div class="col-md-10">
              <input class="form-control" type="text" id="xxx" name="name" placeholder="xxx" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="xxx" class="control-label col-md-2">Genre: </label>
            <div class="col-md-10">
              <select id="xxx" name="xxx" class="form-control" required>
                <option>Education</option>
                <option>Mystery</option>
                <option>Health</option>
              </select>
            </div>
          </div>
        </form><!-- could be upload image -->
      </div>
      <div class="rj">
        <button type="submit" class="ce apn">Save Change</button>
        <button type="button" class="ce apn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>