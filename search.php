<!DOCTYPE HTML>
<html>
<?php
header('Content-Type: text/html; charset=utf-8');
include 'searching.php' ?>;

<head>
	<title>Search</title>
	<link rel="stylesheet" href="style.css">
	<h2 class="headText">Search</h2>
</head>
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
			<option value="select">Champion</option>
		</select>
		<select name="role" class="selectBox">
			<option value="select">Role</option>
			<option value="top">Top</option>
			<option value="mid">Mid</option>
			<option value="jungle">Jungle</option>
			<option value="adc">ADC</option>
			<option value="support">Support</option>
		</select>
		<select name="rank" class="selectBox">
			<option value="select">Rank</option>
			<option value="challenger">Challenger</option>
			<option value="master">Master</option>
			<option value="diamond">Diamond</option>
			<option value="platinum">Platinum</option>
			<option value="gold">Gold</option>
			<option value="silver">Silver</option>
			<option value="bronze">Bronze</option>
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
			<option value="german">German</option>
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
</body>
</html>
