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
		echo "<script> alert('connction failure');";
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
		
			$sql = "SELECT * FROM Registration WHERE email='".$email."'";
			if ($conn->query($sql) === FALSE) {
    			echo $conn->error;
    			echo "<script> alert('database fail'); </script>";
			}

			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
    			$row = $result->fetch_assoc();
			
				
				if (empty($_POST["password"]))
				{
					$passwordError = "Password is required";
					$valid = "false"; 
				}
				else
 				{
					$password = $_POST["password"];
					
					if ($password != $row['password']){
						$passwordError = "Invalid Password";
						$valid="false";
					}
					
				
					if($valid == "true"){
    					session_start();
    					$_SESSION['user']=$row['summoner'];
    					$_SESSION['name']=$_SESSION['user'];
    					$_SESSION['id']=$row['summonerID'];
    					header('LOCATION: profile.php');
       					exit();
					}
				}
			} else {
				$emailError = "Invalid email";
				$valid = "false";
			}
		
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