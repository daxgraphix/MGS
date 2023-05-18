
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

//if(strlen($_SESSION['alogin'])==0)
	//{	
//header('location:index.php');
//}
//else{
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
	$id=intval($_GET['id']);
$sql=mysqli_query($bd, "update user set username='$uname',phone='$phone',email='$email',usertype='$utype',password='$hashed',status='$status' where id='$id'");
$_SESSION['msg']="User Updated !!";

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


									<br />

			<form class="form-horizontal row-fluid" name="user" method="post" >
<?php
$id=intval($_GET['id']);
$query=mysqli_query($bd, "select * from user where id='$id'");
while($row=mysqli_fetch_array($query))

?>									
<div class="control-group">
<label class="control-label" for="basicinput">User name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="user" value="<?php echo  htmlentities
($row['username']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">phone</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="user" value="<?php echo  htmlentities
($row['phone']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">email</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="user" value="<?php echo  htmlentities
($row['email']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">User type</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="user" value="<?php echo  htmlentities
($row['usertype']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">password</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="user" value="<?php echo  htmlentities
($row['password']);?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">status</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="user" value="<?php echo  htmlentities
($row['status']);?>" class="span8 tip" required>
</div>
</div>


	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
											</div>
										</div>
									</form>
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
<?php// } 
?>