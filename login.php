<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="c10.jpg" class="body_deg">

<center>
	
<div class="form_deg">
	<center class="title_deg">
		LEADERS LOGIN
	</center>
<form action="login_check.php" method="POST" class="login_form">
	<div>
		<label class="label_deg">username</label>
        <input type="text" name="username">  
	</div>
	<div>
		<label class="label_deg">password</label>
        <input type="password" name="password">  
	</div>
	<div>
        <input class="btn btn-primary" type="submit" name="submit" value="Login">
         <a class="btn btn-primary" href="logout.php">Back</a>
	</div>



</form>




</div>



</center>



</body>

</html>