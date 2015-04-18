<!DOCTYPE HTML>
<html>
<?php session_start(); 

include 'UpdateValidation.php';
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

$name=$_SESSION['name'];

$sql = "SELECT * FROM address_book WHERE summoner='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
};
?>

<label>Confirm</label>
<label><?php echo $row->summoner; ?></label>
</html>