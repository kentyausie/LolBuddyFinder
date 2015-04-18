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
		echo "<script> alert(".$conn->connect_error.");";
	}

	if(isset($_POST['submit'])) {
		
		$email=$password="";
		$emailError=$passwordError="";
		$valid="true";

		if (empty($_POST["email"])){
			$emailError = "Email address is required";
			$valid = "false"; 
		} else {
		    $email = test_input($_POST["email"]);
   		}

		if (empty($_POST["password"]))
		{
			$passwordError = "Password is required";
			$valid = "false"; 
		}
		else
 		{
			$password = test_input($_POST["password"]);
		}

		if($valid=="true"){
		
		$sql = "SELECT * FROM Registration WHERE email='".$email."'";
		if ($conn->query($sql) === FALSE) {
    		echo $conn->error;
    		alert("database fail");
		}

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		$row = $result->fetch_assoc();
		} else {
			$emailError = "Invalid email";
			$valid = "false";
		}
   	 	
   	 	echo "<script> alert(".$row['email']."); </script>";
   	 	/*
    	session_start();
    	$_SESSION['name']=$sumName;
    	header('LOCATION: profile.php');
       	exit();
       	*/
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