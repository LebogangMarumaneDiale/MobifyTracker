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
	 height: 250px;
        margin: 20px;
        background-color: #87CEEB;
}
.emergency-det{
	color:black;
	font-size:10px;

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
.nav-wrapper ul li.active a{
  background-color: white;
  color: blue;  
}
.nav-wrapper ul li.activeRegister a{
  background-color: white;
  color: red;  
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
		<li class="active"><a href="login.php">Login</a></li>
		<li class="activeRegister"><a href="register.php">Register</a></li>
	</ul></center>
</div>
<div class="article-container">
<center><div class="helo">
	<br>
<h1 class="header-article">Catch the thief <span class="pp">And be safe</span></h1>
<p class="para">catch the thief</p>
<p class="para">VIMBA!!</p>
</div></center>
</div>
<div class="footer-container">
</div>
</div>
</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.18.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.18.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
</html>