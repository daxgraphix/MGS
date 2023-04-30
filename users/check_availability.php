<?php 
require_once("includes/config.php");
if(!empty($_POST["username"])) {
	$email= $_POST["username"];
	
		$result =mysqli_query($bd, "SELECT username FROM user WHERE username='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
