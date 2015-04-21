<!DOCTYPE HTML>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="style.css">
	<h2 class="headText">Search</h2>
</head>
<body>
	<form action="search.php" style="text-align:center;padding-top: 15px;">
		<select name="role" calss="selectBox">
			<option value="select">Role</option>
			<option value="top">Top</option>
			<option value="mid">Mid</option>
			<option value="jungle">Jungle</option>
			<option value="adc">ADC</option>
			<option value="support">Support</option>
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