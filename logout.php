<?php
session_start(); 
$_SESSION['name']="";
header('LOCATION: index.php');
exit();
?>