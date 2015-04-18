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
	var region = "<?php echo $row['region']; ?>";
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
				var sumInfo = arr[sumName];
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
<h1>Profile</h1><br>
<div>
<img id="profileIcon" height=100 width=100 style="float: left; "></img>
</div>
<div  style="margin: 0px 0px 0px 110px;">
	<div style="float: left; width: 150px">
		<label>Summoner Name: </label><br>
		<label>Summoner Level: </level>
		
	</div>
</div>
<div>
	<label><?php echo $row['summoner']; ?></label><br>
	<p id="level" style="margin: 0px 0px 0px 0px;"></p>
</div>

<div style="background-color:grey; margin:300px 0px 0px 0px;">
	<h3>Match History</h3>
</div>
<script>
	document.getElementById('level').innerHTML = ""+sumInfo.summonerLevel;
	document.getElementById("profileIcon").src = "http://ddragon.leagueoflegends.com/cdn/4.3.12/img/profileicon/"+sumInfo.profileIconId+".png";
</script>
</html>