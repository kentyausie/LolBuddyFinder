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

$name=$_SESSION['name'];
//$name = "kingkoryo";
$sql = "SELECT * FROM Registration WHERE summoner='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
};

$conn->close();
?>

<script>
	var leagueCheck="";
	var region = "<?php echo $row['region']; ?>";
	//var region = "na";
	if(region.localeCompare("") !== 0){
    	var sumName = "<?php echo $row['summoner']; ?>";
    	//var sumName = "kingkoryo";
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
				leagueCheck = "UNRANKED";
			}
			else{
				alert("Unknown error");
			}
			
			if (leagueCheck=="UNRANKED"){
				var tier = "UNRANKED";
			} else {
				var tier = leagueInfo[0].tier;
			}
    	}
    	
    	
	}
</script>
<h1>Profile</h1><br>
<div>
<img id="profileIcon" height=100 width=100 style="float: left; "></img>
</div>
<div  style="margin: 0px 0px 0px 110px;">
	<table style="width:300px">
  		<tr>
    		<td>Summoner Name:</td>
    		<td>Summoner Level:</td> 
    		<td>Region:</td>
    		<td>Summoner Rank:</td>
  		</tr>
  		<tr>
    		<td><p id="name" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td><p id="level" style="margin: 0px 0px 0px 0px;display: inline;"></p></td> 
    		<td><p id="region" style="margin: 0px 0px 0px 0px;display: inline;"></p></td>
    		<td><p id="rank" style="margin: 0px 0px 0px 0px;display: inline;"></p>
			<img id="rankIcon" height=25 width=25></img></td>
  		</tr>
</div>
<div>
	
	
	
	
	
	
</div>

<div>
	<h3>Champions:</h3>
	<img id="champ1" height=0 width=0></img>
	<img id="champ2" height=0 width=0></img>
	<img id="champ3" height=0 width=0></img>
	<img id="champ4" height=0 width=0></img>
	<img id="champ5" height=0 width=0></img>
</div>

<div>
	<h3 style="top-margin:100px;">Roles:</h3>
	<img id="top" height=0 width=0></img>
	<img id="mid" height=0 width=0></img>
	<img id="jungle" height=0 width=0></img>
	<img id="adc" height=0 width=0></img>
	<img id="support" height=0 width=0></img>
</div>

<div style="background-color:LightSteelBlue; margin:80px 0px 0px 0px;">
	<h3>Match History</h3>
</div>
<script>
	document.getElementById("profileIcon").src = "http://ddragon.leagueoflegends.com/cdn/4.3.12/img/profileicon/"+sumInfo.profileIconId+".png";
	document.getElementById("rankIcon").src = "/rank_icons/"+tier+".png";
	document.getElementById('name').innerHTML = ""+sumInfo.name;
	document.getElementById('level').innerHTML = ""+sumInfo.summonerLevel;
	document.getElementById('rank').innerHTML = tier;
	document.getElementById('region').innerHTML = "<?php echo $row['region'] ?>" ;
	
	if("<?php echo $row['champ1']; ?>" !=""){
		document.getElementById("champ1").src = "/champion_icons/<?php echo $row['champ1']; ?>square.png";
		document.getElementById("champ1").height = 50;
		document.getElementById("champ1").width = 50;
	}
	if("<?php echo $row['champ2']; ?>" !=""){
		document.getElementById("champ2").src = "/champion_icons/<?php echo $row['champ2']; ?>square.png";
		document.getElementById("champ2").height = 50;
		document.getElementById("champ2").width = 50;
	}
	if("<?php echo $row['champ3']; ?>" !=""){
		document.getElementById("champ3").src = "/champion_icons/<?php echo $row['champ3']; ?>square.png";
		document.getElementById("champ3").height = 50;
		document.getElementById("champ3").width = 50;
	}
	if("<?php echo $row['champ4']; ?>" !=""){
		document.getElementById("champ4").src = "/champion_icons/<?php echo $row['champ4']; ?>square.png";
		document.getElementById("champ4").height = 50;
		document.getElementById("champ4").width = 50;
	}
	if("<?php echo $row['champ5']; ?>" !=""){
		document.getElementById("champ5").src = "/champion_icons/<?php echo $row['champ5']; ?>square.png";
		document.getElementById("champ5").height = 50;
		document.getElementById("champ5").width = 50;
	}
	
	if("<?php echo $row['roleTop']; ?>" ==1){
		document.getElementById("top").src = "/roles/top.png";
		document.getElementById("top").height = 50;
		document.getElementById("top").width = 50;
	}
	if("<?php echo $row['roleMid']; ?>" ==1){
		document.getElementById("mid").src = "/roles/mid.png";
		document.getElementById("mid").height = 50;
		document.getElementById("mid").width = 50;
	}
	if("<?php echo $row['roleJungle']; ?>" ==1){
		document.getElementById("jungle").src = "/roles/jungle.png";
		document.getElementById("jungle").height = 50;
		document.getElementById("jungle").width = 50;
	}
	if("<?php echo $row['roleADC']; ?>" ==1){
		document.getElementById("adc").src = "/roles/adc.png";
		document.getElementById("adc").height = 50;
		document.getElementById("adc").width = 50;
	}
	if("<?php echo $row['roleSupport']; ?>" ==1){
		document.getElementById("support").src = "/roles/support.png";
		document.getElementById("support").height = 50;
		document.getElementById("support").width = 50;
	}
</script>
</html>