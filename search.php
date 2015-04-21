<?php
session_start(); 
$_SESSION['name']="king koryo";
header('LOCATION: profile.php');
exit();
?>