<?php
session_start();
include('includew/config.php');
if (isset($_SESSION['username']) && isset($_SESSION['email']))
 {
  $uname= $_SESSION['username'];
  $email= $_SESSION['email'];
}else{
header("location:../index.html");
exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin| Complaint Details</title>
  <link type="text/css" href="bootstrapw/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrapw/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="cssw/theme.css" rel="stylesheet">
  <link type="text/css" href="imagesw/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
  <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>

</head>
<body>
<?php include('includew/header.php');?>

  <div class="wrapper">
    <div class="container">
      <div class="row">
<?php include('includew/sidebar.php');?>       
      <div class="span9">
          <div class="content">

            


  <div class="module">
              <div class="module-head">
                <h3>Complaint Details</h3>
              </div>
              <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  
                  <tbody>

<?php $st='closed';
$query=mysqli_query($bd, "select complaints.*,user.username as name,division.divisionName as catname from complaints join user on user.id=complaints.userid join division on division.id=complaints.division where complaints.usertype='village'");
while($row=mysqli_fetch_array($query))
{

?>                  
                    <tr>
                      <td><b>Complaint Number</b></td>
                      <td><?php echo htmlentities($row['complaintNumber']);?></td>
                      <td><b>Complainant Name</b></td>
                      <td> <?php echo htmlentities($row['name']);?></td>
                      <td><b>Reg Date</b></td>
                      <td><?php echo htmlentities($row['regDate']);?></td>
                    </tr>

<tr>
                      <td><b>Division </b></td>
                      <td><?php echo htmlentities($row['division']);?></td>
                      <td><b>Ward</b></td>
                      <td> <?php echo htmlentities($row['ward']);?></td>
                      
                    </tr>

<tr>
                      <td><b>Complaint Details </b></td>
                      
                      <td colspan="5"> <?php echo htmlentities($row['complaintDetails']);?></td>
                      
                    </tr>

                      </tr>

<?php $ret=mysqli_query($bd, "select complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.remarkDate as rdate from complaintremark join complaints on complaints.complaintNumber=complaintremark.complaintNumber");
while($rw=mysqli_fetch_array($ret))
{
?>
<tr>
<td><b>Remark</b></td>
<td colspan="5"><?php echo  htmlentities($rw['remark']); ?> <b>Remark Date <?php echo  htmlentities($rw['rdate']); ?></b></td>
</tr>

<tr>
<td><b>Status</b></td>
<td colspan="5"><?php echo  htmlentities($rw['sstatus']); ?></td>
</tr>
<?php }?>

<tr>
<td><b>Final Status</b></td>
                      
                      <td colspan="5"><?php if($row['status']=="")
                      { echo "Not Process Yet";
} else {
                     echo htmlentities($row['status']);
                     }?></td>
                      
                    </tr>



<tr>
                      <td><b>Action</b></td>
                      
                      <td> 
                      <?php if($row['status']=="closed"){

                        } else {?>
<a href="javascript:void(0);" onClick="popUpWindow('http://localhost/MGS/admin/updatecomplaint.php?cid=<?php echo htmlentities($row['complaintNumber']);?>');" title="Update order">
                       <button type="button" class="btn btn-primary">Take Action</button></td>
                      </a><?php } ?></td>
                      <td colspan="4"> 
                      <a href="javascript:void(0);" onClick="popUpWindow('http://localhost/MGS/admin/userprofile.php?uid=<?php echo htmlentities($row['userid']);?>');" title="Update order">
                       <button type="button" class="btn btn-primary">View User Detials</button></a></td>
                      
                    </tr>
                    <?php  } ?>
                    
                </table>
              </div>
            </div>            

            
            
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->

<?php include('includew/footer.php');?>

  <script src="scriptsw/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scriptsw/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrapw/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="scriptsw/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="scriptsw/datatables/jquery.dataTables.js"></script>
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