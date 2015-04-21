<?php
session_start(); 
$_SESSION['name']=$_SESSION['user'];
header('LOCATION: profile.php');
exit();
?>