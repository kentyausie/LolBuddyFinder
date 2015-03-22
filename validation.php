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
echo @mysql_ping() ? '' : 'false';

$fname =""; // Sender Name
$lname =""; // Sender Name
$company =""; // Subject of mail
$phone =""; 
$email =""; // Sender's email ID
$website=""; 
$address1 =""; 
$address2 =""; 
$city =""; 
$province =""; 
$postal =""; 
$birthday =""; 
$date =""; 
$notes ="";
$valid = "true"; 


$fnameError =""; // Sender Name
$lnameError =""; // Sender Name
$companyError =""; // Subject of mail
$phoneError =""; 
$emailError =""; // Sender's email ID
$websiteError=""; 
$address1Error =""; 
$address2Error =""; 
$cityError =""; 
$provinceError =""; 
$postalError =""; 
$birthdayError =""; 
$dateError =""; 
$notesError =""; 
$successMessage =""; // On submitting form below function will execute.
if(isset($_POST['submit'])) { // Checking null values in message.
	if (empty($_POST["fname"])){
		$fnameError = "First Name is required";
		$valid = "false"; 
	} else {
		$fname = test_input($_POST["fname"]); // check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$fname))
		{
			$fnameError = "Only letters and white space allowed";
			$valid = "false"; 
		}
	} // Checking null values in the message.

	if (empty($_POST["lname"])){
		$lnameError = "Last Name is required";
		$valid = "false"; 
	} else {
		$lname = test_input($_POST["lname"]); // check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lname))
		{
			$lnameError = "Only letters and white space allowed";
			$valid = "false"; 
		}
	} // Checking null values in the message.

	$company = $_POST["company"];


	if (empty($_POST["phone"])){
		$phoneError = "Phone number is required";
		$valid = "false"; 
	} else {
		$phone = test_input($_POST["phone"]);
		$pattern = "/^[0-9\_]{7,20}/";
		if (!preg_match($pattern,$phone))
		{
			$phoneError = "Invalid phone number";
			$valid = "false"; 
		}
	}

        if (empty($_POST["email"])){
		$emailError = "Email address is required";
		$valid = "false"; 
	} else {
	        $email = test_input($_POST["email"]);
        }
	
	if (empty($_POST["website"]))
	{ 
		$website = test_input($_POST["website"]);
	}
/*
	else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
		$websiteError = "Invalid website format";
		$valid = "false"; 
	}*/
        else {
		$website = test_input($_POST["website"]);
	}

	if (empty($_POST["address1"]))
	{
		$address1Error = "Address is required";
		$valid = "false"; 
	}
	else
 	{
		$address1 = test_input($_POST["address1"]);
	}
	$address2 = test_input($_POST["address2"]);

	if (empty($_POST["city"]))
	{
		$cityError = "City is required";
		$valid = "false"; 
	} else {
		$city = test_input($_POST["city"]);
	}

	$province = $_POST["province"];
	

	if (empty($_POST["postal"])){
		$postalError = "Postal Code is required";
		$valid = "false"; 
	} else {
		$postal = test_input($_POST["postal"]);
		$postalpattern = "/[a-z][0-9][a-z][- ]?[0-9][a-z][0-9]$/i";
 		if(!preg_match($postalpattern,$postal))
		{
			$postalError = "Postal code not valid, please re-enter.";
			$valid = "false"; 
		}
	} 

	if (empty($_POST["birthday"]))
	{
		$birthdayError = "Birthday is required";
		$valid = "false"; 
	} else {
		$birthday = test_input($_POST["birthday"]);
	}

	if (empty($_POST["date"]))
	{
		$dateError = "Date is required";
		$valid = "false"; 
	} else {
		$date = test_input($_POST["date"]);
	}

	$notes = $_POST["notes"];

	if($valid=="true"){

		$sql = "INSERT INTO address_book (first, last, company, phone, email, website, address1, address2, city, province, postal, birthday, date, notes) VALUES ('".$fname."','".$lname."','".$company."','".$phone."','".$email."','".$website."','".$address1."','".$address2."','".$city."','".$province."','".$postal."','".$birthday."','".$date."','".$notes."')";

		if ($conn->query($sql) === TRUE) {
	 	   echo "New record created successfully<br>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
               echo "<a href=SQLindex.html>Home</a>";
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