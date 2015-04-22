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
	
// sql to create table
$sql = "CREATE TABLE `messages` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`title` VARCHAR( 255 ) NULL 
`message` TEXT NOT NULL ,
`from` INT( 11 ) NOT NULL ,
`to` INT( 11 ) NOT NULL ,
`from_viewed` BOOL NOT NULL DEFAULT '0',
`to_viewed` BOOL NOT NULL DEFAULT '0',
`from_deleted` BOOL NOT NULL DEFAULT '0',
`to_deleted` BOOL NOT NULL DEFAULT '0',
`from_vdate` DATETIME NULL ,
`to_vdate` DATETIME NULL ,
`from_ddate` DATETIME NULL ,
`to_ddate` DATETIME NULL ,
`created` DATETIME NOT NULL
) ENGINE = MYISAM ;

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>
