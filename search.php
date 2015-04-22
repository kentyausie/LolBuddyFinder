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
	<br><br><br>
	<div>
	<img id="profileIcon[0]" height=0 width=0 style="float: left; " src=""></img>
	<img id="rankIcon[0]" height=0 width=0 style="float: left; "></img>
	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td style="text-align: center" colspan="2"><p class="formDescriptionText" id="name[0]" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td style="text-align: center"><p id="level[0]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td> 
    		<td style="text-align: center"><p id="region[0]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    		<td style="text-align: center"><p id="language[0]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
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
    	<tr>
    		<td><a id="mailLink[0]"><img id="mailIcon[0]" height=0 width=0></img></a></td>
    	</tr>
		</tbody>
	</table>
	
</div>
<br><br><br>
<div>
	<img id="profileIcon[1]" height=0 width=0 style="float: left; " src=""></img>
	<img id="rankIcon[1]" height=0 width=0 style="float: left; "></img>
	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td style="text-align: center" colspan="2"><p class="formDescriptionText" id="name[1]" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td style="text-align: center"><p id="level[1]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td> 
    		<td style="text-align: center"><p id="region[1]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    		<td style="text-align: center"><p id="language[1]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    	</tr>
    	<tr>
    		<td><img id="top[1]" height=0 width=0></img></td>
			<td><img id="mid[1]" height=0 width=0></img></td>
			<td><img id="jungle[1]" height=0 width=0></img></td>
			<td><img id="adc[1]" height=0 width=0></img></td>
			<td><img id="support[1]" height=0 width=0></img></td>
    	</tr>
    	<tr>
			<td><img id="champ1[1]" height=0 width=0></img></td>
			<td><img id="champ2[1]" height=0 width=0></img></td>
			<td><img id="champ3[1]" height=0 width=0></img></td>
			<td><img id="champ4[1]" height=0 width=0></img></td>
			<td><img id="champ5[1]" height=0 width=0></img></td>
    	</tr>
    	<tr>
    		<td><a id="mailLink[1]"><img id="mailIcon[1]" height=0 width=0></img></a></td>
    	</tr>
		</tbody>
	</table>
	
</div>

<br><br><br>
<div>
	<img id="profileIcon[2]" height=0 width=0 style="float: left; " src=""></img>
	<img id="rankIcon[2]" height=0 width=0 style="float: left; "></img>
	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td style="text-align: center" colspan="2"><p class="formDescriptionText" id="name[2]" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td style="text-align: center"><p id="level[2]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td> 
    		<td style="text-align: center"><p id="region[2]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    		<td style="text-align: center"><p id="language[2]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    	</tr>
    	<tr>
    		<td><img id="top[2]" height=0 width=0></img></td>
			<td><img id="mid[2]" height=0 width=0></img></td>
			<td><img id="jungle[2]" height=0 width=0></img></td>
			<td><img id="adc[2]" height=0 width=0></img></td>
			<td><img id="support[2]" height=0 width=0></img></td>
    	</tr>
    	<tr>
			<td><img id="champ1[2]" height=0 width=0></img></td>
			<td><img id="champ2[2]" height=0 width=0></img></td>
			<td><img id="champ3[2]" height=0 width=0></img></td>
			<td><img id="champ4[2]" height=0 width=0></img></td>
			<td><img id="champ5[2]" height=0 width=0></img></td>
    	</tr>
    	<tr>
    		<td><a id="mailLink[2]"><img id="mailIcon[2]" height=0 width=0></img></a></td>
    	</tr>
		</tbody>
	</table>
	
</div>

<br><br><br>
<div>
	<img id="profileIcon[3]" height=0 width=0 style="float: left; " src=""></img>
	<img id="rankIcon[3]" height=0 width=0 style="float: left; "></img>
	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td style="text-align: center" colspan="2"><p class="formDescriptionText" id="name[3]" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td style="text-align: center"><p id="level[3]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td> 
    		<td style="text-align: center"><p id="region[3]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    		<td style="text-align: center"><p id="language[3]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    	</tr>
    	<tr>
    		<td><img id="top[3]" height=0 width=0></img></td>
			<td><img id="mid[3]" height=0 width=0></img></td>
			<td><img id="jungle[3]" height=0 width=0></img></td>
			<td><img id="adc[3]" height=0 width=0></img></td>
			<td><img id="support[3]" height=0 width=0></img></td>
    	</tr>
    	<tr>
			<td><img id="champ1[3]" height=0 width=0></img></td>
			<td><img id="champ2[3]" height=0 width=0></img></td>
			<td><img id="champ3[3]" height=0 width=0></img></td>
			<td><img id="champ4[3]" height=0 width=0></img></td>
			<td><img id="champ5[3]" height=0 width=0></img></td>
    	</tr>
    	<tr>
    		<td><a id="mailLink[3]"><img id="mailIcon[3]" height=0 width=0></img></a></td>
    	</tr>
		</tbody>
	</table>
	
</div>

<br><br><br>
<div>
	<img id="profileIcon[4]" height=0 width=0 style="float: left; " src=""></img>
	<img id="rankIcon[4]" height=0 width=0 style="float: left; "></img>
	<table style="margin: 0px 0px 0px 110px;">
  		<tbody>
  		<tr>
    		<td style="text-align: center" colspan="2"><p class="formDescriptionText" id="name[4]" style="margin: 0px 0px 0px 0px; display: inline;"></p></td>
    		<td style="text-align: center"><p id="level[4]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td> 
    		<td style="text-align: center"><p id="region[4]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    		<td style="text-align: center"><p id="language[4]" style="margin: 0px 0px 0px 0px;display: inline;text-align: center;"></p></td>
    	</tr>
    	<tr>
    		<td><img id="top[4]" height=0 width=0></img></td>
			<td><img id="mid[4]" height=0 width=0></img></td>
			<td><img id="jungle[4]" height=0 width=0></img></td>
			<td><img id="adc[4]" height=0 width=0></img></td>
			<td><img id="support[4]" height=0 width=0></img></td>
    	</tr>
    	<tr>
			<td><img id="champ1[4]" height=0 width=0></img></td>
			<td><img id="champ2[4]" height=0 width=0></img></td>
			<td><img id="champ3[4]" height=0 width=0></img></td>
			<td><img id="champ4[4]" height=0 width=0></img></td>
			<td><img id="champ5[4]" height=0 width=0></img></td>
    	</tr>
    	<tr>
    		<td><a id="mailLink[4]"><img id="mailIcon[4]" height=0 width=0></img></a></td>
    	</tr>
		</tbody>
	</table>
	
</div>
	
</body>
<?php
if ($result->num_rows > 0) {
   		$i=0;
   		
   		while ($i < 5){
   			$row = $result->fetch_assoc();
   			if(isset($row)){
   			echo "<script> 
   			document.getElementById('profileIcon[".$i."]').src = 'http://ddragon.leagueoflegends.com/cdn/5.2.1/img/profileicon/".$row['profileID'].".png';
			document.getElementById('profileIcon[".$i."]').height=150;
			document.getElementById('profileIcon[".$i."]').width=150;
			document.getElementById('rankIcon[".$i."]').src = '/rank_icons/".$row['tier'].".png';
			document.getElementById('rankIcon[".$i."]').height=150;
			document.getElementById('rankIcon[".$i."]').width=150;
			document.getElementById('name[".$i."]').innerHTML = '".$row['summoner']."';
			document.getElementById('level[".$i."]').innerHTML = '".$row['level']."';
			document.getElementById('region[".$i."]').innerHTML = '".$row['region']."';</script>
			document.getElementById('mailLink[".$i."]').href = 'message.php?name='".$row['name']."';
			document.getElementById('mailIcon[".$i."]').src = '/misc/mail.png';
			document.getElementById('mailIcon[".$i."]').height=25;
			document.getElementById('mailIcon[".$i."]').width=25;";
			if($row['champ1'] !== ""){
				echo " <script>
				document.getElementById('champ1[".$i."]').src = '/champion_icons/".$row['champ1']."square.png';
				document.getElementById('champ1[".$i."]').height = 50;
				document.getElementById('champ1[".$i."]').width = 50;</script>";
			}
			if($row['champ2'] !== ""){
				echo "<script>
				document.getElementById('champ2[".$i."]').src = '/champion_icons/".$row['champ2']."square.png';
				document.getElementById('champ2[".$i."]').height = 50;
				document.getElementById('champ2[".$i."]').width = 50; </script>";
			}
			if($row['champ3'] !== ""){
				echo "<script>
				document.getElementById('champ3[".$i."]').src = '/champion_icons/".$row['champ3']."square.png';
				document.getElementById('champ3[".$i."]').height = 50;
				document.getElementById('champ3[".$i."]').width = 50; </script>";
			}
			if($row['champ4'] !== ""){
				echo "<script>
				document.getElementById('champ4[".$i."]').src = '/champion_icons/".$row['champ4']."square.png';
				document.getElementById('champ4[".$i."]').height = 50;
				document.getElementById('champ4[".$i."]').width = 50; </script>";
			}
			if($row['champ5'] !== ""){
				echo "<script>
				document.getElementById('champ5[".$i."]').src = '/champion_icons/".$row['champ5']."square.png';
				document.getElementById('champ5[".$i."]').height = 50;
				document.getElementById('champ5[".$i."]').width = 50; </script>";
			}
	
			if($row['roleTop'] == 1){
				echo "<script>
				document.getElementById('top[".$i."]').src = '/roles/top.png';
				document.getElementById('top[".$i."]').height = 50;
				document.getElementById('top[".$i."]').width = 50; </script>";
			}
			if($row['roleMid'] == 1){
				echo "<script>
				document.getElementById('mid[".$i."]').src = '/roles/mid.png';
				document.getElementById('mid[".$i."]').height = 50;
				document.getElementById('mid[".$i."]').width = 50; </script>";
			}
			if($row['roleJungle'] == 1){
				echo "<script>
				document.getElementById('jungle[".$i."]').src = '/roles/jungle.png';
				document.getElementById('jungle[".$i."]').height = 50;
				document.getElementById('jungle[".$i."]').width = 50; </script>";
			}
			if($row['roleADC'] == 1){
				echo "<script>
				document.getElementById('adc[".$i."]').src = '/roles/adc.png';
				document.getElementById('adc[".$i."]').height = 50;
				document.getElementById('adc[".$i."]').width = 50; </script>";
			}
			if($row['roleSupport'] == 1){
				echo "<script>
				document.getElementById('support[".$i."]').src = '/roles/support.png';
				document.getElementById('support[".$i."]').height = 50;
				document.getElementById('support[".$i."]').width = 50; </script>";
			}
			

			}
			$i=$i+1;
		} 
	
	} else {
		echo "<h2>No Results</h2>";
    }
?>
</html>
