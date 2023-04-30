
<?php
session_start();
include('include/config.php');
if (isset($_SESSION['username']) && isset($_SESSION['email']))
 {
  $uname= $_SESSION['username'];
  $email= $_SESSION['email'];
}else{
header("location:../index.html");
exit();
}

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

    
if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$utype=$_POST['usertype'];
	$pass=$_POST['password'];
	$hashed=md5($pass);
	$status=$_POST['status'];
$sql=mysqli_query($bd,"INSERT INTO user(username,phone,email,usertype,password,status) 
	VALUES('$uname','$phone','$email','$utype','$hashed','$status')");
$_SESSION['msg']="Leader Added !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($bd, "delete from user where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="User deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Category</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>User</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="User" method="post" action="user.php" >
									
<div class="control-group">
<label class="control-label" for="basicinput">User Name</label>
<div class="controls">
<input type="text" placeholder="Enter use Name"  name="username" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">phone</label>
<div class="controls">
<input type="text" placeholder="Enter phone number"  name="phone" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">email</label>
<div class="controls">
<input type="text" placeholder="Enter email"  name="email" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">usertype</label>
<div class="controls">
<input type="text" placeholder="Enter usertype"  name="usertype" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">password</label>
<div class="controls">
<input type="text" placeholder="Enter password"  name="password" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">status</label>
<div class="controls">
<input type="text" placeholder="Enter status"  name="status" class="span8 tip" required>
</div>
</div>
                                           
									

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	<div class="module">
							<div class="module-head">
								<h3>Manage User</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>username</th>
											<th>phone</th>
											<th>email</th>
											<th>password</th>
											<th>status</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($bd, "select * from user");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['username']);?></td>
											<td><?php echo htmlentities($row['phone']);?></td>
											<td> <?php echo htmlentities($row['email']);?></td>
											<td><?php echo htmlentities($row['password']);?></td>
											<td><?php echo htmlentities($row['status']);?></td>
											<td>
											<a href="edit-user.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="user.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php// } ?>