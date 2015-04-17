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
$email =""; // Sender's email ID
$password1 =""; 
$password2 =""; 
$valid = "true"; 


$sumError =""; // Sender Name
$emailError =""; // Sender's email ID
$password1Error="";
$password2Error=""; 

$successMessage =""; // On submitting form below function will execute.
if(isset($_POST['submit'])) { // Checking null values in message.
	if (empty($_POST["sumName"])){
		$sumError = "Summoner name is required";
		$valid = "false"; 
	} else {
		$sumName = test_input($_POST["sumName"]); // check name only contains letters and whitespace
		echo '<script language="javascript" src="myScripts.js">';
		echo 'summonerLookUp()';
		echo '</script>';
	} // Checking null values in the message.

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
	
	if($valid=="true"){
		/*
		$sql = "UPDATE address_book SET first='".$fname."', last='".$lname."', company='".$company."', phone='".$phone."', email='".$email."' , website='".$website."', address1='".$address1."', address2='".$address2."', city='".$city."', province='".$province."', postal='".$postal."', birthday='".$birthday."', date='".$date."', notes='".$notes."' WHERE id=".$_POST['id'];
		if ($conn->query($sql) === FALSE) {
    		echo "Error updating record: " . $conn->error."<br>";
		}else {
    		echo "Update Successful<br>";
		}
    	echo "<a href=SQLindex.html>Home</a>";
    	*/
    	echo '<script language="javascript">';
		echo 'alert("message successfully sent2")';
		echo '</script>';
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