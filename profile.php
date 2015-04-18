<!DOCTYPE HTML>
<html>
<?php 

session_start(); 

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
$name = "kingkoryo";
$sql = "SELECT * FROM Registration WHERE summoner='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
};
?>

<script>
	//var region = "<?php echo $row['region']; ?>";
	var region = "na";
	if(region.localeCompare("") !== 0){
    	//var sumName = "<?php echo $row['summoner']; ?>";
    	var sumName = "kingkoryo";
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
				alert("Summoner Not Found!");
			}
			else{
				alert("Unknown error");
			}
    	}
    	
    	var id = sumInfo.id;
    	if (id !== "") {
       		var xmlhttp = new XMLHttpRequest();
			var url = "https://na.api.pvp.net/api/lol/"+region+"/v2.5/league/by-summoner/"+id+"?api_key="+API_KEY;			

			xmlhttp.open("GET", url, false);
			xmlhttp.send();
			if(xmlhttp.status == 200){
				var arr2 = JSON.parse(xmlhttp.responseText);
				var leagueInfo = arr2[id];
			}
			else if(xmlhttp.status == 404){
				alert("Summoner Not Found!");
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
		<label>Summoner Level: </level><br>
		<label>Summoner Rank: </level><br>
	</div>
</div>
<div>
	<p id="name" style="margin: 0px 0px 0px 0px;"></p>
	<p id="level" style="margin: 0px 0px 0px 0px;"></p>
	<p id="rank" style="margin: 0px 0px 0px 0px;"></p><br>
	<p id="id" style="margin: 0px 0px 0px 0px;"></p>
</div>

<div style="background-color:LightSteelBlue; margin:80px 0px 0px 0px;">
	<h3>Match History</h3>
</div>
<script>
	document.getElementById('name').innerHTML = ""+sumInfo.name;
	document.getElementById('level').innerHTML = ""+sumInfo.summonerLevel;
	document.getElementById('id').innerHTML = ""+sumInfo.id;
	document.getElementById('rank').innerHTML = ""+leagueInfo.tier;
	document.getElementById("profileIcon").src = "http://ddragon.leagueoflegends.com/cdn/4.3.12/img/profileicon/"+sumInfo.profileIconId+".png";
</script>
</html>