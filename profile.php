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

//$name=$_SESSION['name'];
$name = "wretchedthrawn";
$sql = "SELECT * FROM Registration WHERE summoner='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
};
?>

<script>
function summonerLookUp() {
	var region = "";
	if(document.getElementById("na").checked){
		region = "na";
	} 
	else if(document.getElementById("br").checked){
		region = "br";
	} 
	else if(document.getElementById("eune").checked){
		region = "eune";
	}
	else if(document.getElementById("euw").checked){
		region = "euw";
	} 
	else if(document.getElementById("kr").checked){
		region = "kr";
	} 
	else if(document.getElementById("lan").checked){
		region = "lan";
	} 
	else if(document.getElementById("las").checked){
		region = "las";
	} 
	else if(document.getElementById("oce").checked){
		region = "oce";
	} 
	else if(document.getElementById("ru").checked){
		region = "ru";
	} 
	else if(document.getElementById("tr").checked){
		region = "tr";
	} 
	else {
		alert("Select a region");
	}
	
	
	if(region.localeCompare("") !== 0){
    	var sumName = "<?php echo $row['summoner']; ?>";
    	var API_KEY = "01edb1d0-a26b-4f78-afbb-3eeb9de5b0f9";
    	if (sumName !== "") {
       		var xmlhttp = new XMLHttpRequest();
			var url = "https://na.api.pvp.net/api/lol/"+region+"/v1.4/summoner/by-name/"+sumName+"?api_key="+API_KEY;
			

			xmlhttp.open("GET", url, false);
			xmlhttp.send();
			if(xmlhttp.status == 200){
				var arr = JSON.parse(xmlhttp.responseText);
				var sumInfo = arr[sumName].id;
				document.getElementById("sumInfo").value = sumInfo;
				document.getElementById("sumRegion").value = region;
			}
			else if(xmlhttp.status == 404){
				document.getElementById("sumInfo").value = 404;
			}
			else{
				alert("Unknown error");
			}
    	}
    }
</script>


<label>Profile</label><br>
<label><?php echo $row['summoner']; ?></label><br>
</html>