<?php
$servername = "lovett.usask.ca";
$username = "cmpt350_key053"; 
$password = "awp0t6pokb";
$dbname = "cmpt350_key053";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sqlQuery ="";

if(isset($_POST['submit'])) { // Checking null values in message.
	if ($_POST['champion'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		$sqlQuery = $sqlQuery."(champ1='".$_POST['champion']."' OR champ2='".$_POST['champion']."' OR champ3='".$_POST['champion']."' OR champ4='".$_POST['champion']."' OR champ5='".$_POST['champion']."')";
	}
	if ($_POST['role'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		if($_POST['role'] == "top"){
			$sqlQuery = $sqlQuery."roleTop = 1";
		}
		else if($_POST['role'] == "mid"){
			$sqlQuery = $sqlQuery."roleMid = 1";
		}
		else if($_POST['role'] == "jungle"){
			$sqlQuery = $sqlQuery."roleJungle = 1";
		}
		else if($_POST['role'] == "adc"){
			$sqlQuery = $sqlQuery."roleADC = 1";
		}
		else if($_POST['role'] == "support"){
			$sqlQuery = $sqlQuery."roleSupport = 1";
		}
	}
	if ($_POST['region'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		$sqlQuery = $sqlQuery."region='".$_POST['region']."'";
	}
	if ($_POST['language'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		$sqlQuery = $sqlQuery."language='".$_POST['language']."'";
	}
	
		
	$sql = "SELECT * FROM Registration WHERE ".$sqlQuery;
	if ($conn->query($sql) === FALSE) {
    	echo $conn->error;
		echo "<script> alert('Lookup Error'); </script>";
	}
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
   		$row = $result->fetch_assoc();
   		echo "<script> alert('Found'); </script>";
	} else {
		echo "<script> alert('No Results'); </script>";
    }
	
	$conn->close();
}
function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>