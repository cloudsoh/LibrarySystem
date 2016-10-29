 <?php 
    include('studentheader.php');
  ?>
      <div class="hc aps">
        <div class="apa">
  <div class="apb">
    <h6 class="apd">Overview</h6>
    <h2 class="apc">Welcome <?php echo $_SESSION['username'];?></h2>
  </div>
</div>

<div class="anv alg ala">
  <h3 class="anw anx">Library News/Notices</h3>
</div>
<div class="fu db aln">
      
<p>Dear all reader,
For any latest news or notices, please refer to our library website : 
<a href="http://lib.sc.edu.my/">http://lib.sc.edu.my/</a>
,Thanks.
<br>
The Library
</p>
</div>

<div class="anv alg ala">
  <h3 class="anw anx">All stats</h3>
</div>
<!--Using php to display the stats of total-->
<div class="fu apt">
  <div class="gq gg ala">
    <div class="apu ano">
      <div class="alz">
        <span class="anj">Books</span>
        <h2 class="ani">
          12,938
          <small class="ank anl">5%</small>
        </h2>
        <hr class="ans akt">
      </div>
     </div>
  </div>
  <div class="gq gg ala">
    <div class="apu anr">
      <div class="alz">
        <span class="anj">E-Books</span>
        <h2 class="ani">
          758
          <small class="ank anm">1.3%</small>
        </h2>
        <hr class="ans akt">
      </div>
     </div>
  </div>
  <div class="gq gg ala">
    <div class="apu anp">
      <div class="alz">
        <span class="anj">Newspaper</span>
        <h2 class="ani">
          1,293
          <small class="ank anl">6.75%</small>
        </h2>
        <hr class="ans akt">
      </div>
    </div>
  </div>
  <div class="gq gg ala">
    <div class="apu anq">
      <div class="alz">
        <span class="anj">New Arrivals</span>
        <h2 class="ani">
          758
          <small class="ank anm">1.3%</small>
        </h2>
        <hr class="ans akt">
      </div>
     </div>
  </div>
</div>

<hr class="aky">
<div class="ud">
  <div class="eg">
    <table class="cl" data-sort="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Book code</th>
          <th>Book Name</th>
          <th>Times</th>
          <th>Function</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once('config.php');
          $studid=$_SESSION['userid'];
          $sql="SELECT * FROM books WHERE lenderID = $studid";
          $result=$conn->query($sql);
          $no=1;
          if($result->num_rows>0){
            while ($rows = $result->fetch_assoc()) {
        ?> 
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $rows['bookID'];?></td>
          <td><?php echo $rows['bookName'];?></td>
          <td><?php 
                $sessiontime=strtotime($_SESSION['dlenderDate']);
                if($sessiontime==null){
                  $sessiontime=$_SESSION['dlenderDate'];
                  $DTcurrenttime=DateTime::createFromFormat('Y-m-d H:i:sa', $sessiontime);
                }else{
                  $sessiontime=date("Y-m-d H:i:sa",$sessiontime);
                  $DTcurrenttime=DateTime::createFromFormat('Y-m-d H:i:sa', $sessiontime);
                }
                $timestamp = $DTcurrenttime->getTimestamp();
                if($_SESSION['type']==1){
                  $d=strtotime("+7 day",$timestamp);
                  $expiredtime=date("Y-m-d H:i:sa",$d);
                }
                $currenttime=date("Y-m-d H:i:sa");
                $currenttime=DateTime::createFromFormat('Y-m-d H:i:sa', $currenttime);
                $expiredtime=DateTime::createFromFormat('Y-m-d H:i:sa', $expiredtime);
                $interval = $currenttime->diff($expiredtime);
                $timeleftformat=('');
                if($interval->format('%a')>1){
                  $timeleftformat=$timeleftformat . '%a days ';
                }else{
                  $timeleftformat=$timeleftformat . '%a day ';
                }
                if($interval->format('%H')>1){
                  $timeleftformat=$timeleftformat . '%H hours ';
                }else{
                  $timeleftformat=$timeleftformat . '%H hour ';
                }
                if($interval->format('%i')>1){
                  $timeleftformat=$timeleftformat . '%i minutes ';
                }else{
                  $timeleftformat=$timeleftformat . '%i minute ';
                }
                if($interval->format('%s')>1){
                  $timeleftformat=$timeleftformat . '%s seconds ';
                }else{
                  $timeleftformat=$timeleftformat . '%s second ';
                }
                  $calcfines=$interval->format('%a');
                  $fines=($interval->invert ? "RM$calcfines.00" : "--");
                  $timeleftformat=($interval->invert ? "$timeleftformat expired" : "$timeleftformat left");
                  echo $interval->format($timeleftformat);
              ?></td>
          <td>
            <div class="akh">
              <div class="nz">
                <a href="#" class="ce apn">
                            Return
                  </a><!--Edit the book-->
              </div>

            </div>
  <?php $no++;}}else{}?>
    </div></td>
        </tr>
      </tbody>
    </table>
  </div>
    </div><!--close content -->
  </div>

  