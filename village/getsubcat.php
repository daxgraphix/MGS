<?php
include('includes/config.php');
if(!empty($_POST["catid"])) 
{
 $id=intval($_POST['catid']);
 if(!is_numeric($id)){
 
 	echo htmlentities("invalid industryid");exit;
 }
 else{
 $stmt = mysqli_query($bd, "SELECT ward FROM ward WHERE divisionid ='$id'");
 ?><option selected="selected">Select ward </option><?php
 while($row=mysqli_fetch_array($stmt))
 {
  ?>
  <option value="<?php echo htmlentities($row['ward']); ?>"><?php echo htmlentities($row['ward']); ?></option>
  <?php
 }
}

}
?>