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
			$sqlQuery = "(champ1=".$_POST['champion']." OR champ2=".$_POST['champion']." OR champ3=".$_POST['champion']." OR champ4=".$_POST['champion']." OR champ5=".$_POST['champion'];
		} else {
			$sqlQuery = $sqlQuery." AND (champ1=".$_POST['champion']." OR champ2=".$_POST['champion']." OR champ3=".$_POST['champion']." OR champ4=".$_POST['champion']." OR champ5=".$_POST['champion'];
		}
	}
	if ($_POST['role'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		if($_POST['role'] == "top"){
			$sqlQuery = $sqlQuery."roleTop = 1";
		}
		echo "<script> alert('".$sqlQuery."'); </script>";
	} 
	if ($_POST['region'] !== "select"){
		echo '<script> alert("'.$sqlQuery.'"); </script>';
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		echo "<script> alert('".$sqlQuery."'); </script>";
		$sqlQuery = $sqlQuery."region='".$_POST['region']."'";
		echo "<script> alert('".$sqlQuery."'); </script>";
	} 
	if($_POST["sumInfo"]==404 || $_POST["sumInfo"]==""){
		//echo "<script> alert('".$sumName."'); </script>";
		$sumError="Invalid Summoner name";
		$valid=false;
	} else {
		$id=$_POST["sumInfo"];
	}
	if (empty($_POST["email"])){
		$emailError = "Email address is required";
		$valid = "false"; 
	} else {
	    $email = test_input($_POST["email"]);
    }

	if (empty($_POST["password1"]))
	{
		$password1Error = "Password is required";
		$valid = "false"; 
	}
	else
 	{
		$password1 = test_input($_POST["password1"]);
	}
	
	if (empty($_POST["password2"]))
	{
		$password2Error = "Please re-type password";
		$valid = "false"; 
	}
	else
 	{
		$password2 = test_input($_POST["password2"]);
		
		if(strcmp($password1,$password2) != 0){
			$password2Error = "Password doesn't match";
			$valid = "false";
		}
	}
	
	
	if(empty($_POST["champions"])){
		$champError="Select at least one champion";
		$valid=false;
	} else {
		$count=-1;
		foreach($_POST["champions"] as $champ){
			$count = $count +1;
			$champions[$count] = $champ;
		}
	}
	if(isset($_POST["top"])){
		$top=1;
		$roleCount=$roleCount+1;
	}
	if(isset($_POST["mid"])){
		$mid=1;
		$roleCount=$roleCount+1;
	}
	if(isset($_POST["jungle"])){
		$jungle=1;
		$roleCount=$roleCount+1;
	}
	if(isset($_POST["adc"])){
		$adc=1;
		$roleCount=$roleCount+1;
	}
	if(isset($_POST["support"])){
		$support=1;
		$roleCount=$roleCount+1;
	}
	if($roleCount == 0){
		$roleError="Select at least one role";
		$valid='false';
	}
	$timezone = $_POST['timezone'];
	$language = $_POST['language'];
	
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