<!DOCTYPE html>
<html>
<head><style>
  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
#footer{
 position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
  <title>personal website</title>
  <link rel="stylesheet" type="text/css" href="nyumbani.css">
</head>
</li>
<h1 align="center">WELCOME MKURANGA DISTRICT GRIEVANCE SYSTEM </h1>
<h2 align="center"></h2>
<hr>
    
    <div class="contener">
      
    <div id="content">
      <div id="nav">
        <a href="http://localhost/Complaint Management System/"><h3> DASHBOARD</h3></a>
         <ul>
        <div class ="selected">
<!--<lebel for ="leaders">leaders categories:</lebel>
 <select id="leaders">
<option value="hamlet chairperson "></option>
  <option value="village chairperson "></option>
  <option value="ward excutive officer"></option>
  <option value="division excutive officer "></option>
  <option value="district commissioner"></option>-->


      <!--<option <li><a href="About me.html">About me</a></li></option>
      <option<li><a href="Contact me.html">Contact me</a></li></option>
      <option<li><a href="Hobby.html">Hobby</a></li></option>-->
          
        </ul></div>
      </div>
      <div id="main">
        
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
a{
  text-decoration: none;
  color: gold;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 124px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<CENTER><h3>CLICK DOWN TO WRITE AND SUBMITT YOUR COMMENT AND OPINIONS</h3>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">COMMENT & OPINION</button>
</CENTER>

<div id="id01" class="modal" >
  
  <form class="modal-content animate" action="comment_action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logo.png " alt="Avatar" class="avatar" >
    </div>

    <div class="container">
      <label for="division">division </label>
    <select id="division" name="division">
      <option value="shungubweni">shungubweni</option>
      <option value="mkuranga">mkuranga</option>
      <option value="kisiju">kisiju</option>
      <option value="mkamba">mkamba</option>
    </select>

       <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
      <button type="submit">submit</button>
     <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

      </div>
    
    <div id="footer">
      copyright @copy;2022 mchux.
    </div>
    </div>
    
</div>  
</div>
</body>
</html>