<?php

session_start();
session_destroy();
setcookie("phoneNumber",'', time()-3600);
header("location:login.php");

?>