<!Doctype>
<html>
<?php include 'login.php'; ?>
<head>
	<img src="head_img.jpg" class="headImg"></img>
	<title>LoL Buddy Finder</title>
	<link rel="stylesheet" href="style.css">
	<h2 class="headText">LOL Buddy Finder </h2>
	
</head>
<body>
		<form name="login" style="text-align:center;" method="post" action="index.php">
			<input class="textbox" type="email" value="" placeholder="E-Mail Address" name="email"></input>
			<span class="error"><?php echo $emailError;?></span><br>
			<input class="textbox" type="password" value="" placeholder="Password" name="password">
			<span class="error"><?php echo $passwordError;?></span><br><br>
			<input type="submit" class="submitButton" name="submit" value="Log In">
		</form>
		<form action="signup.php" style="text-align:center;padding-top: 15px;">
			<input class="submitButton" type="submit" name="submit" value="Sign Up">
		</form>
</body>
</html>