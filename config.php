<?php
$servername = "lovett.usask.ca";
$username = "cmpt350_key053"; 
$password = "awp0t6pokb";
$dbname = "cmpt350_key053";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysql_connect('lovett.usask.ca','cmpt350_key053','awp0t6pokb') or die("Error: ".mysql_error()); 
$db = mysql_select_db("cmpt350_key053") or die("Error: ".mysql_error()); 

$link = mysql_connect('lovett.usask.ca','cmpt350_key053','awp0t6pokb');
//(...)
if($link == false){
    //try to reconnect
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script> alert('connction failure');";
} 
?>
