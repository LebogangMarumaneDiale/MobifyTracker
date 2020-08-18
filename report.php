<?php

include("connect.php");
include("functions.php");

if(logged_in())
{
	header("location:report.php");
	exit();
}


$error = "";

if(isset($_POST['submit']))
{
	
$fullNames = mysql_real_escape_string($_POST['fname']);	
$phoneNumber = mysql_real_escape_string($_POST['pnumber']);
$email = mysql_real_escape_string($_POST['email']);
$message = mysql_real_escape_string($_POST['message']);

$date = date("d F Y");

$conditions = isset($_POST['conditions']);


	$insertQuery = "INSERT INTO contact(fullNames, phoneNumber, email, date) VALUES('$fullNames', '$phoneNumber', '$email','$message', '$date')";
	
	if(mysqli_query($con, $insertQuery));
	{   
		$error = "Your message has been sent";
	}
		
	
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Report crime</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
.header-wrapper{
background-color:#white;
width:100%;
height:40px;
text-align:right;
color:#black;
}

/*.pic-wrapper{
	background-color:#white;
    width:30%;
    height:10px;
    align:right;

}*/

.nav-wrapper ul li{
	list-style-type:none;
	display:inline;
	padding:35px;
	font-size:20px;
	text-transform:uppercase
}
.nav-wrapper ul li a{
	color:black;
}
.nav-wrapper a{
	text-decoration:none;
}
.article-container{
	 height: 250px;
        margin: 20px;
        background-color: #87CEEB;
}

.forms{
	 height: 350px;
	 width: 250px;
	 float:left;
	 border:2px solid red;
     margin-left: 1060px;
     background-color: #CB7379;
		
}

.emergency-det{
	color:black;
	font-size:10px;

}

.nav-wrapper ul li a:hover{
	color:red;
	border-top-style:solid;
	
}
h1.header-article{
	text-align:center;
	font-size:30px;
	color:blue;
	
}
.para{
	color:red;
	font-size: 20px;
}
.pp{
	color:red;
}

.helo{
	
}
</style>
</head>
<body>
<div class="outer-wrapper">
<div class="pic-wrapper"> 
	<img src="images.JPEG" style="float:left" height="100" width="100"/>
</div>
<div class="header-wrapper">
	<h1 class="emergency-det">Local Police station: 10111 </h1>
	<h1 class="emergency-det">Ambulances: 011 375 5911 </h1>
</div>
<br>
<div class="nav-wrapper">
	<center><ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Updates</a></li>
		<li><a href="report.php">Report crime</a></li>
		<li><a href="#">Emergency contact details</a></li>
	</ul></center>
</div>

<div class="article-container">
<center><div class="helo">
	<br>
<h1 class="header-article">Provide any useful information at the bottom right corner <span class="pp"></span></h1>
<p class="para">Login <a href="login.php">here</a> to report crime</p>
<p class="para">VIMBA!!</p>
</div></center>
</div>

<div class="forms">

<form method ="POST" action ="report.php" enctype="multipart/form-data">

<label>Full names:</label><br/>
<input type = "text" name = "fname" class = "inputFields" required/><br/><br/>

<label>Phone Number:</label><br/>
<input type = "text" name = "pnumber" class = "inputFields" required/><br/><br/>

<label>Email:</label><br/>
<input type = "text" name = "email" class = "inputFields" required/><br/><br/>

<label>Message</label><br><br>
	<textarea cols="30" rows="5" name="message">Comment here!!</textarea>
	<br><br>

<input type = "submit" class = "theButtons" name = "submit"/>

</form>
<br><br>

</div>

<div class="footer-container">
</div>
</div>
</body>
</html>