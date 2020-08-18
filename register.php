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
	
$firstName = mysql_real_escape_string($_POST['fname']);	
$lastName = mysql_real_escape_string($_POST['lname']);
$phoneNumber = mysql_real_escape_string($_POST['pnumber']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$passwordConfirm = mysql_real_escape_string($_POST['passwordConfirm']);
$date = date("d F Y");

$conditions = isset($_POST['conditions']);


if(strlen($firstName)<3)
{
	$error = "first name is too short";
}

else if(strlen($lastName)<3)
{
	$error = "Last name is too short";
}

else if(strlen($phoneNumber)!==10)
{
	$error = "Phone number must consist of 10 numbers starting with Zero(0)";
}

else if(phoneNumber_exists($phoneNumber, $con))
{
	$error = "Someone is already registered with this phone number";
}


else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$error = "Please enter a valid email address";
}

else if(strlen($password)<8)
{
	$error = "Password must be at least 8 characters long";
}

else if($password!==$passwordConfirm)
{
	$error = "Password does not match";
}

else if(!$conditions)
{
	$error = "You must agree with the terms and conditions";
}


else{
	
	$password = md5($password);
	
	$insertQuery = "INSERT INTO users(firstName, lastName, phoneNumber, email, password, date) VALUES('$firstName', '$lastName', '$phoneNumber', '$email', '$password', '$date')";
	
	if(mysqli_query($con, $insertQuery));
	{
		
		
			$error = "You are successfully registered.";
	}
		
	
}
}

?>

<!doctype html>

<html>

<head>

<title>Registration Page</title>
<link rel="stylesheet" href="css/styles.css"/>
</head>


<body>

<div id="error" style = "<?php if($error !=""){?> display:block; <?php } ?>"> <?php echo $error; ?> </div>

<div id="wrapper">

<div id="menu">
<a href="index.php">Home</a>
<a href="login.php">Login</a>
</div>

<div id="formDiv">
<form method ="POST" action ="register.php" enctype="multipart/form-data">

<label>First Name:</label><br/>
<input type = "text" name = "fname" class = "inputFields" required/><br/><br/>

<label>Last Name:</label><br/>
<input type = "text" name = "lname" class = "inputFields" required/><br/><br/>

<label>Phone Number:</label><br/>
<input type = "text" name = "pnumber" class = "inputFields" required/><br/><br/>

<label>Email:</label><br/>
<input type = "text" name = "email" class = "inputFields" required/><br/><br/>

<label>Password:</label><br/>
<input type = "password" name = "password" class = "inputFields" required/><br/><br/>

<label>Re-enter Password:</label><br/>
<input type = "passwordConfirm" name = "passwordConfirm" class = "inputFields" required/><br/><br/>

<input type = "checkbox" name = "conditions"/>
<label><a href ="#">I agree with terms and conditions</a></label><br/><br/><br/>

<input type = "submit" class = "theButtons" name = "submit"/>

</form>

</div>

</div>

</body>

</html>