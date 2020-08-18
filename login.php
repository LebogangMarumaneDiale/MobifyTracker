<?php

include("connect.php");
include("functions.php");

if(logged_in())
{
	header("location:profile.php");
	exit();
}

$error = "";

if(isset($_POST['submit']))
{
	

$phoneNumber = mysql_real_escape_string($_POST['pnumber']);
$password = mysql_real_escape_string($_POST['password']);
$checkBox = isset($_POST['keep']);

if(phoneNumber_exists($phoneNumber, $con))
{
	$result = mysqli_query($con, "SELECT password FROM users WHERE phoneNumber = '$phoneNumber'");
	$retrievepassword = mysqli_fetch_assoc($result);
	
	if(md5($password) !== $retrievepassword['password'])
	{
		$error = "Password is incorrect";
	}
	
	else
	{
	    $_SESSION['phoneNumber'] = $phoneNumber;
		
		if($checkBox =="on")
		{
			setcookie("phoneNumber", $phoneNumber, time()+3600);
		}
		
        header("location: profile.php");		
	}
}

else
{
	$error = "phone number does not exists";
}

}

?>

<!doctype html>

<html>

<head>

<title>Login Page</title>
<link rel="stylesheet" href="css/styles.css"/>
</head>


<body>

<div id="error" style = "<?php if($error !=""){?> display:block; <?php } ?>"> <?php echo $error; ?> </div>

<div id="wrapper">

<div id="menu">
<a href="index.php">Register account</a>
<a href="index.php">Home</a>
</div>
        
<div id="formDiv">
<form method ="POST" action ="login.php">

<img src="images.JPEG">

  <label>Community member : </label><br/><br/>

<label>Phone Number:</label><br/>
<input type = "text" name = "pnumber" class = "inputFields" required/><br/><br/>

<label>Password:</label><br/>
<input type = "password" name = "password" class = "inputFields" required/><br/><br/>

<input type = "checkbox" name = "keep" />

<label>Keep me logged in</label><br/><br/>

<input type = "submit" name = "submit" class = "theButtons" value = "login"/>

</form>

</div>

</div>

</body>

</html>