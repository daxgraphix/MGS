<?php

$host="localhost";
$user="root";
$password="";
$db="MGS";

$data=mysqli_connect($host,$user,$password,$db);


if ($data===false) 
{
	die("connection error");
}


if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
	$name = $_POST['username'];
	$pass = $_POST['password'];

	$sql="select * from user where username= '".$name."' AND password='".$pass."' ";

	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);

   if ($row["usertype"]=="hamlet") 
   {
    session_start();
     $_SESSION['username']= $row['username'];
     $_SESSION['email']=$row['email'];
     $_SESSION['id']=$row['id'];
     $_SESSION['usertype']=$row['usertype'];
   	header("location: users/comment_user.php");
   }

   else if ($row["usertype"]=="admin") 
   {
    session_start();
    $_SESSION['username']= $row['username'];
     $_SESSION['email']=$row['email'];
   	header("location: admin/comment_user.php");
   }

  else if ($row["usertype"]=="village") 
  {
    session_start();
    $_SESSION['username']= $row['username'];
     $_SESSION['email']=$row['email'];
      $_SESSION['id']=$row['id'];
     $_SESSION['usertype']=$row['usertype'];
   	header("location: village/comment_user.php");
   }
  else if ($row["usertype"]=="ward") 
  {
    session_start();
    $_SESSION['username']= $row['username'];
     $_SESSION['email']=$row['email'];
      $_SESSION['id']=$row['id'];
     $_SESSION['usertype']=$row['usertype'];
  	header("location: ward/comment_user.php");
   }
else if ($row["usertype"]=="division") 
   {
    session_start();
    $_SESSION['username']= $row['username'];
     $_SESSION['email']=$row['email'];
      $_SESSION['id']=$row['id'];
     $_SESSION['usertype']=$row['usertype'];
   	header("location: division/comment_user.php");
  }

else 
   {
   	echo "username or password do not match";
   }
}





?>