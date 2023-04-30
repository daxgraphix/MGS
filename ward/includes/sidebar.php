<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="logo.PNG" class="img-circle" width="150"></a></p>
                   <?php $query=mysqli_query($bd, "select username from user where username='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <h5 class="centered"><?php echo htmlentities($row['username']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


<li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                 <i class="fa fa-book"></i> <i class="menu-icon icon-cog"></i> 
                  <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                  Manage Complaint
                </a>
                <ul id="togglePages" class="collapse unstyled">
                  <li>
                    <a href="notprocess-complaint.php">
                      <i class="icon-tasks"></i>
                      Village Chairperson Complaint
                      <?php
//$rt = mysqli_query($bd, "SELECT * FROM complaints where status is null");
//$num1 = mysqli_num_rows($rt);
{?>
    
                      <b class="label orange pull-right"><?php //echo htmlentities($num1); ?></b>
                      <?php } ?>
                    </a>
                  </li>
                
                </ul>
              </li>

                  <li class="mt">
                      <a href="comment_user.php">
                          <i class="fa fa-dashboard"></i>
                          <span>complaints from user</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
              
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span>Lodge Complaint</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Complaint History</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

       <!-- <li>
                    <a href="inprocess-complaint.php">
                      <i class="icon-tasks"></i>
                      Pending Complaint
                   <?php 
  $status="in Process";                   
$rt = mysqli_query($bd, "SELECT * FROM complaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
                    </a>
                  </li>
                  <li>
                    <a href="closed-complaint.php">
                      <i class="icon-inbox"></i>
                      Closed Complaints
       <?php 
  $status="closed";                   
$rt = mysqli_query($bd, "SELECT * FROM complaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

                    </a>
                  </li>-->