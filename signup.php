<!DOCTYPE HTML>
<html>
<style>
.error {color: #FF0000;}
.align {
	width:100%;
	text-align:center;
}
.box {
	border-style: inset;
    border-width: medium;
    width:25%;
}
.textbox {
	height:30px;
	font-size:25px;
}
.headImg {
	width:100%;
	height:5%;
}

</style>
<head>
<img src="headpic.jpg" class="headImg"
<title>Sign up form</title>
</head>

<body>
<h2>Sign up form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p class="align">
<p class="box">
<input class="textbox" type="text" name="sumName" placeholder="Summoner Name" value=""><br>

<input class="textbox" type="email" name="email" placeholder="Email" value=""><br>

<input class="textbox" type="password" name="password1" placeholder="Password" value=""><br>

<input class="textbox" type="password" name="password2" placeholder="Re-type Password" value=""><br>
</p>
</p>
<input class="textbox" type="submit" name="submit" value="Submit">
</form>

<form action="signup.php">
    <input type="submit" value="Home" class="textbox">
</form>

</div>
</div>
</body>
</html>