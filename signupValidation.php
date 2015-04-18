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


$sumName =""; // Sender Name
$sumInfo="";
$email =""; // Sender's email ID
$password1 =""; 
$password2 =""; 
$top=0;
$mid=0;
$jungle=0;
$adc=0;
$support=0;
$roleCount=0;
$valid = "true"; 
$id="";
$champions = array("","","","","");
$region = "";
$timezone="";
$language="";

$sumError =""; // Sender Name
$emailError =""; // Sender's email ID
$password1Error="";
$password2Error="";
$roleError="";
$champError="";
$regionError="";

$successMessage =""; // On submitting form below function will execute.
if(isset($_POST['submit'])) { // Checking null values in message.
	if (empty($_POST["sumName"])){
		$sumError = "Summoner name is required";
		$valid = "false"; 
	} else {
		$sumName = test_input($_POST["sumName"]); // check name only contains letters and whitespace
		$region = $_POST["sumRegion"];
	} // Checking null values in the message.
	if($_POST["sumInfo"]==404 || $_POST["sumInfo"]==""){
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
    	$_SESSION['name']=$sumName;
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