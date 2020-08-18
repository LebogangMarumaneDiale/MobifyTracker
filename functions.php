<?php

function phoneNumber_exists($phoneNumber, $con)
{
	$result = mysqli_query($con, "SELECT id FROM users WHERE phoneNumber = '$phoneNumber'");
	
	if(mysqli_num_rows($result) == 1)
	{
		return true;	
	}
	
	else
	{
		return false;
	}

}

function logged_in()
{
	if(isset($_SESSION['phoneNumber']) || isset($_COOKIE['phoneNumber']))
	{
		return true;
	}
	
	else
	{
		return false;
	}
	
}

?>