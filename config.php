<?php
$servername = "lovett.usask.ca";
$username = "cmpt350_key053"; 
$password = "awp0t6pokb";
$dbname = "cmpt350_key053";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysql_connect("lovett.usask.ca,cmpt350_key053,awp0t6pokb) or die("Error: ".mysql_error()); // Connection to the server
13.
$db = mysql_select_db(cmpt350_key053) or die("Error: ".mysql_error()); // Connecting to the database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script> alert('connction failure');";
} 
echo "Connected successfully";
?>
