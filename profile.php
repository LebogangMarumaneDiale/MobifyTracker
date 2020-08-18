<?php

include("connect.php");
include("functions.php");

if(logged_in())
{
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Catch the thief</title>
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
	 height: 50px;
        margin: 20px;
        background-color: #87CEEB;
}
.emergency-det{
	color:black;
	font-size:10px;
	color: blue;

}

.nav-wrapper ul li a:hover{
	color:red;
	border-bottom:solid;
	
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

    <a href="changepassword.php">Change Password</a><br/>
	<a href="logout.php" style="float:right; padding:10px; margin-right:20px; margin-top: 90px; background-color:red; color:#333; text-decoration:none;">LOGOUT</a></br>

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
	

</div></center>
</div>
<div><center>
   <form name="myForm" action="handle.php" method="get">
   
   <label>Message</label><br><br>
	<textarea cols="40" rows="20" name="message">Comment here!!</textarea>
	<br><br>
	
	<label><b>Gender</b></label>
	<input type="radio" name="gender" /><b>Female</b>
	<input type="radio" name="gender" /><b>Male</b>
	<br><br>
	
	<label><b>Describe the situation</b></label><br><br>
	<select name="situation">
	<option value="ran">Thiefs ran away</option>
	<option value="present">Thiefs still in the yard</option>
	<option value="damage">Thiefs trying to break our door</option>
	<option value="unknown">Unknown situation</option>
	</select>
	<br><br>
	<input type="submit" name="submit" value="submit" />
	<input type="reset" name="reset" value="Clear/Reset" />
	<br><br>
	<br><br>
   
   </form>
   </center>
</div>

<div class="footer-container">
</div>
</div>
</body>
</html>

<?php	
	
}
else
{
	header("location:login.php");
	exit();
}	

?>