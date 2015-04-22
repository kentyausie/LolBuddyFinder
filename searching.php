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
		if($sqlQuery == ""){
			$sqlQuery = "(champ1=".$_POST['champion']." OR champ2=".$_POST['champion']." OR champ3=".$_POST['champion']." OR champ4=".$_POST['champion']." OR champ5=".$_POST['champion'].")";
		} else {
			$sqlQuery = $sqlQuery." AND (champ1=".$_POST['champion']." OR champ2=".$_POST['champion']." OR champ3=".$_POST['champion']." OR champ4=".$_POST['champion']." OR champ5=".$_POST['champion'].")";
		}
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
	echo '<script> alert("'.$sqlQuery.'"); </script>';
	
	if($valid=="true"){
		
		$sql = "INSERT INTO Registration (summonerID, summoner, email, password, roleTop, roleMid, roleJungle, roleADC, roleSupport, champ1, champ2, champ3, champ4, champ5, region, timezone,language) VALUES ('".$id."','".$sumName."','".$email."','".$password."','".$top."','".$mid."','".$jungle."','".$adc."','".$support."','".$champions[0]."','".$champions[1]."','".$champions[2]."','".$champions[3]."','".$champions[4]."','".$region."','".$timezone."','".$language."')";
		if ($conn->query($sql) === FALSE) {
    		echo $conn->error;
		}
    
    	session_start();
    	$_SESSION['user']=$sumName;
    	$_SESSION['name']=$_SESSION['user'];
    	header('LOCATION: profile.php');
       	exit();
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