<!DOCTYPE HTML>
<html>
<?php include 'searching.php' ?>;
<head>
	<title>Search</title>
	<link rel="stylesheet" href="style.css">
	<h2 class="headText">Search</h2>
</head>
<body>
	<form action="search.php" style="text-align:center;padding-top: 15px;" method="post">
		<select name="champion" class="selectBox">
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
			<option value="korean">Korean 한국어</option>
			<option value="mandarin">Mandarin 中文/国语</option>
			<option value="cantonese">Cantonese 廣東話</option>
			<option value="japanese">Japanese 日本語</option>
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