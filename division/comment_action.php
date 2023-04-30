<?php
session_start();
error_reporting(0);

$conn = mysqli_connect("localhost" , "root", "", "cms");
if ($conn === false) {
	die("ERROR: could not connect." . mysqli_connect_error());
}
$id=$_SESSION['id'];
$division=$_REQUEST['division'];
$subject=$_REQUEST['subject'];
 $sql=  "insert into comment values('$id','$division','$subject')";
if (mysqli_query($conn, $sql)) {
	
	echo "saccessfully";
}
else {
	echo "fail";
}

?>