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

if(isset($_GET['name'])){
	$name=$_GET['name'];
} else {
	$name=$_SESSION['name'];
}
$tier="";
$sql = "SELECT * FROM Registration WHERE summoner='".$name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
};
$upRegion = strtoupper($row['region']);
$row['language'] = ucfirst($row['language']);

?>

<head>
	<link rel="stylesheet" href="style.css">
	<title id="title"><?php echo $row['summoner']; ?>'s Profile</title>
	<h2 class="headText" id="head"><?php echo $row['summoner']; ?></h2>
</head>
<body>
	<div style="alignment: center;">
	<form action="gohome.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="Home">
	</form>
	<form action="search.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="Search">
	</form>
	<form action="update.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="Edit Profile">
	</form>
	<form action="logout.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="Logout">
	</form>
	<form action="config.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="Config">
	</form>
	<form action="pm.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="PM">
	</form>
	<form action="message.php" style="text-align:center;padding-top: 15px;display: inline;">
		<input type="submit" name="submit" value="Message">
	</form>


	</div>
	<div>
	<img id="profileIcon" height=150 width=150 style="float: left; "></img>

	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td>Summoner Name:</td>
    		<td><p id="name" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
  		</tr>
  		<tr>
    		<td>Summoner Level:</td> 
    		<td><p id="level" style="margin: 0px 0px 0px 0px;display: inline;"></p></td> 
  		</tr>
  		<tr>
    		<td>Region:</td>
    		<td><p id="region" style="margin: 0px 0px 0px 0px;display: inline;"></p></td>
  		</tr>
  		<tr>
    		<td>Language:</td>
    		<td><p id="language" style="margin: 0px 0px 0px 0px;display: inline;"></p></td>
  		</tr>
  		<tr>
    		<td>Timezone:</td>
    		<td><p id="timezone" style="margin: 0px 0px 0px 0px;display: inline;"></p></td>
  		</tr>
		</tbody>
	</table>
	
	<h3 class="formDescriptionText">Summoner Rank: <p id="rank" style="margin: 0px 0px 0px 0px;"></h3>
	<img id="rankIcon" height=150 width=150></img><br>

	<h3 class="formDescriptionText">Champions:</h3>
	<img id="champ1" height=0 width=0></img>
	<img id="champ2" height=0 width=0></img>
	<img id="champ3" height=0 width=0></img>
	<img id="champ4" height=0 width=0></img>
	<img id="champ5" height=0 width=0></img>



	<h3 class="formDescriptionText" style="top-margin:100px;">Roles:</h3>
	<img id="top" height=0 width=0></img>
	<img id="mid" height=0 width=0></img>
	<img id="jungle" height=0 width=0></img>
	<img id="adc" height=0 width=0></img>
	<img id="support" height=0 width=0></img>

</div>
<div style="background-color:LightSteelBlue; margin:20px 0px 0px 0px;">
	<h3>Match History</h3>
</div>
</body>
<script>
	document.getElementById('title').innerHTML = "<?php echo $row['summoner']; ?>'s Profile";
	document.getElementById('head').innerHTML = "<?php echo $row['summoner']; ?>'s Profile";
	document.getElementById("profileIcon").src = "http://ddragon.leagueoflegends.com/cdn/5.2.1/img/profileicon/<?php echo $row['profileID']?>.png";
	document.getElementById("rankIcon").src = "/rank_icons/<?php echo $row['tier']; ?>.png";
	document.getElementById('name').innerHTML = "<?php echo $row['summoner']; ?>";
	document.getElementById('level').innerHTML = "<?php echo $row['level']; ?>";
	document.getElementById('rank').innerHTML = "<?php echo $row['tier']; ?>";
	document.getElementById('region').innerHTML = "<?php echo $upRegion; ?>";
	
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
	
	document.getElementById('language').innerHTML = "<?php echo $row['language']; ?>";
	document.getElementById('timezone').innerHTML = "<?php echo $row['timezone']; ?>";
</script>
<?php $conn->close(); ?>
</html>
