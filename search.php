<!DOCTYPE HTML>
<html>
<?php
header('Content-Type: text/html; charset=utf-8');
?>

<head>
	<title>Search</title>
	<link rel="stylesheet" href="style.css">
	<h2 class="headText">Search</h2>
</head>
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


$sqlQuery ="";

if(isset($_POST['submit'])) { // Checking null values in message.
	if ($_POST['champion'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		$sqlQuery = $sqlQuery."(champ1='".$_POST['champion']."' OR champ2='".$_POST['champion']."' OR champ3='".$_POST['champion']."' OR champ4='".$_POST['champion']."' OR champ5='".$_POST['champion']."')";
	}
	if ($_POST['role'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		if($_POST['role'] == "top"){
			$sqlQuery = $sqlQuery."roleTop = 1";
		}
		else if($_POST['role'] == "mid"){
			$sqlQuery = $sqlQuery."roleMid = 1";
		}
		else if($_POST['role'] == "jungle"){
			$sqlQuery = $sqlQuery."roleJungle = 1";
		}
		else if($_POST['role'] == "adc"){
			$sqlQuery = $sqlQuery."roleADC = 1";
		}
		else if($_POST['role'] == "support"){
			$sqlQuery = $sqlQuery."roleSupport = 1";
		}
	}
	if ($_POST['region'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		$sqlQuery = $sqlQuery."region='".$_POST['region']."'";
	}
	if ($_POST['language'] !== "select"){
		if($sqlQuery !== ""){
			$sqlQuery = $sqlQuery." AND ";
		}
		$sqlQuery = $sqlQuery."language='".$_POST['language']."'";
	}
	
		
	$sql = "SELECT * FROM Registration WHERE ".$sqlQuery;
	if ($conn->query($sql) === FALSE) {
    	echo $conn->error;
		echo "<script> alert('Lookup Error'); </script>";
	}
	$result = $conn->query($sql);

	
	
	
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
<body>
	<form action="search.php" style="text-align:center;padding-top: 15px;" method="post">
		<select name="champion" class="selectBox">
			<option value="select">Champion</option>
			<option value="aatrox">Aatrox</option>
			<option value="ahri">Ahri</option>
			<option value="akali">Akali</option>
			<option value="alistar">Alistar</option>
			<option value="amumu">Amumu</option>
			<option value="anivia">Anivia</option>
			<option value="annie">Annie</option>
			<option value="ashe">Ashe</option>
			<option value="azir">Azir</option>
			<option value="bard">Bard</option>
			<option value="blitzcrank">Blitzcrank</option>
			<option value="brand">Brand</option>
			<option value="braum">Braum</option>
			<option value="caitlyn">Caitlyn</option>
			<option value="cassiopeia">Cassiopeia</option>
			<option value="chogath">Cho'Gath</option>
			<option value="corki">Corki</option>
			<option value="darius">Darius</option>
			<option value="diana">Diana</option>
			<option value="draven">Draven</option>
			<option value="drmundo">Dr.Mundo</option>
			<option value="elise">Elise</option>
			<option value="evelynn">Evelynn</option>
			<option value="ezreal">Ezreal</option>
			<option value="fiddlesticks">Fiddlesticks</option>
			<option value="fiora">Fiora</option>
			<option value="fizz">Fizz</option>
			<option value="galio">Galio</option>
			<option value="gangplank">Gangplank</option>
			<option value="garen">Garen</option>
			<option value="gnar">Gnar</option>
			<option value="gragas">Gragas</option>
			<option value="graves">Graves</option>
			<option value="hecarim">Hecarim</option>
			<option value="heimerdinger">Heimerdinger</option>
			<option value="irelia">Irelia</option>
			<option value="janna">Janna</option>
			<option value="jarvaniv">Jarvan IV</option>
			<option value="jax">Jax</option>
			<option value="jayce">Jayce</option>
			<option value="jinx">Jinx</option>
			<option value="kalista">Kalista</option>
			<option value="karma">Karma</option>
			<option value="karthus">Karthus</option>
			<option value="kassadin">Kassadin</option>
			<option value="katarina">Katarina</option>
			<option value="kayle">Kayle</option>
			<option value="kennen">Kennen</option>
			<option value="khazix">Kha'Zix</option>
			<option value="kogmaw">Kog'Maw</option>
			<option value="leblanc">LeBlanc</option>
			<option value="leesin">Lee Sin</option>
			<option value="leona">Leona</option>
			<option value="lissandra">Lissandra</option>
			<option value="lucian">Lucian</option>
			<option value="lulu">Lulu</option>
			<option value="lux">Lux</option>
			<option value="malphite">Malphite</option>
			<option value="malzahar">Malzahar</option>
			<option value="maokai">Maokai</option>
			<option value="masteryi">Master Yi</option>
			<option value="missfortune">Miss Fortune</option>
			<option value="mordekaiser">Mordekaiser</option>
			<option value="morgana">Morgana</option>
			<option value="nami">Nami</option>
			<option value="nasus">Nasus</option>
			<option value="nautilus">Nautilus</option>
			<option value="nidalee">Nidalee</option>
			<option value="nocturne">Nocturne</option>
			<option value="nunu">Nunu</option>
			<option value="olaf">Olaf</option>
			<option value="orianna">Orianna</option>
			<option value="pantheon">Pantheon</option>
			<option value="poppy">Poppy</option>
			<option value="quinn">Quinn</option>
			<option value="rammus">Rammus</option>
			<option value="reksai">Rek'Sai</option>
			<option value="renekton">Renekton</option>
			<option value="rengar">Rengar</option>
			<option value="riven">Riven</option>
			<option value="rumble">Rumble</option>
			<option value="ryze">Ryze</option>
			<option value="sejuani">Sejuani</option>
			<option value="shaco">Shaco</option>
			<option value="shen">Shen</option>
			<option value="shyvana">Shyvana</option>
			<option value="singed">Singed</option>
			<option value="sion">Sion</option>
			<option value="sivir">Sivir</option>
			<option value="skarner">Skarner</option>
			<option value="sona">Sona</option>
			<option value="soraka">Soraka</option>
			<option value="swain">Swain</option>
			<option value="syndra">Syndra</option>
			<option value="talon">Talon</option>
			<option value="taric">Taric</option>
			<option value="teemo">Teemo</option>
			<option value="thresh">Thresh</option>
			<option value="tristana">Tristana</option>
			<option value="trundle">Trundle</option>
			<option value="tryndamere">Tryndamere</option>
			<option value="twistedfate">Twisted Fate</option>
			<option value="twitch">Twitch</option>
			<option value="udyr">Udyr</option>
			<option value="urgot">Urgot</option>
			<option value="varus">Varus</option>
			<option value="vayne">Vayne</option>
			<option value="veigar">Veigar</option>
			<option value="velkoz">Vel'Koz</option>
			<option value="viktor">Viktor</option>
			<option value="vi">Vi</option>
			<option value="vladimir">Vladimir</option>
			<option value="volibear">Volibear</option>
			<option value="warwick">Warwick</option>
			<option value="wukong">Wukong</option>
			<option value="xerath">Xerath</option>
			<option value="xinzhao">Xin Zhao</option>
			<option value="yasuo">Yasuo</option>
			<option value="yorick">Yorick</option>
			<option value="zac">Zac</option>
			<option value="zed">Zed</option>
			<option value="ziggs">Ziggs</option>
			<option value="zilean">Zilean</option>
			<option value="zyra">Zyra</option>
		</select>
		<select name="role" class="selectBox">
			<option value="select">Role</option>
			<option value="top">Top</option>
			<option value="mid">Mid</option>
			<option value="jungle">Jungle</option>
			<option value="adc">ADC</option>
			<option value="support">Support</option>
		</select>
		<select name="region" class="selectBox">
			<option value="select">Region</option>
			<option value="br">Brazil</option>
			<option value="eune">EU Nordic & East</option>
			<option value="euw">EU West</option>
			<option value="lan">Latin America North</option>
			<option value="las">Latin America South</option>
			<option value="na">North America</option>
			<option value="oce">Oceania</option>
			<option value="ru">Russia</option>
			<option value="tr">Turkey</option>
		</select>
		<select name="language" class="selectBox">
			<option value="select">Language</option>
			<option value="english">English</option>
			<option value="french">French</option>
			<option3 value="german">German</option>
			<option value="spanish">Spanish</option>
			<option value="portuguese">Portuguese</option>
			<option value="korean">Korean ???</option>
			<option value="mandarin">Mandarin ??/??</option>
			<option value="cantonese">Cantonese ???</option>
			<option value="japanese">Japanese ???</option>
			<option value="tagalog">Tagalog</option>
			<option value="vietnamese">Vietnamese</option>
			<option value="arabic">Arabic</option>
			<option value="punjabi">Punjabi</option>
			<option value="hindi">Hindi</option>

			<option value="penguin">Penguin</option>
		</select>
		<input class="topButton" type="submit" name="submit" value="Search">
	</form>	
	
	<div>
	<img id="profileIcon[0]" height=150 width=150 style="float: left; " src=""></img>
	<img id="rankIcon[0]" height=150 width=150 style="float: left; "></img>
	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td><p class="formDescriptionText" id="name[0]" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td><p id="level[0]" style="margin: 0px 0px 0px 0px;display: inline;"></p></td> 
    		<td><p id="region[0]" style="margin: 0px 0px 0px 0px;display: inline;"></p></td>
    		<td><p id="language[0]" style="margin: 0px 0px 0px 0px;display: inline;"></p></td>
    	</tr>
    	<tr>
    		<td><img id="top[0]" height=0 width=0></img></td>
			<td><img id="mid[0]" height=0 width=0></img></td>
			<td><img id="jungle[0]" height=0 width=0></img></td>
			<td><img id="adc[0]" height=0 width=0></img></td>
			<td><img id="support[0]" height=0 width=0></img></td>
    	</tr>
    	<tr>
			<td><img id="champ1[0]" height=0 width=0></img></td>
			<td><img id="champ2[0]" height=0 width=0></img></td>
			<td><img id="champ3[0]" height=0 width=0></img></td>
			<td><img id="champ4[0]" height=0 width=0></img></td>
			<td><img id="champ5[0]" height=0 width=0></img></td>
    	</tr>
		</tbody>
	</table>
	
</div>
	
	<a href="profile.php?name=King Koryo">Link</a>
</body>
<?php
if ($result->num_rows > 0) {
   		$i=0;
   		$row = $result->fetch_assoc();
   		//while ($row = $result->fetch_assoc()) {
   			echo "<script> document.getElementById('profileIcon[".$i."]').src = 'http://ddragon.leagueoflegends.com/cdn/5.2.1/img/profileicon/".$row['profileID'].".png';
			document.getElementById('rankIcon[".$i."]').src = '/rank_icons/".$row['tier'].".png';
			document.getElementById('name[".$i."]').innerHTML = ".$row['summoner'].";
			document.getElementById('level[".$i."]').innerHTML = ".$row['level'].";
			document.getElementById('region[".$i."]').innerHTML = ".$row['region'].";</script>";
			$i=$i+1;
		//}
	
	} else {
		echo "<h2>No Results</h2>";
    }
?>
</html>
