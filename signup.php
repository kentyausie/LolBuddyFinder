<?php include 'validation.php';?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
.box {
		border-style: inset;
border-width: medium;
}

</style>
<title>Sign up form</title>
</head>
<body>
<div class="container">
<div class="main">
<h2>Sign up form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p class="box">
<input class="input" type="text" name="sumName" placeholder="Summoner Name" value="">
//<span class="error">*<?php echo $fnameError;?></span><br>

<input class="email" type="email" name="email" placeholder="email" value="">
//<span class="error">*<?php echo $lnameError;?></span><br>

<input class="input" type="password" name="password1" placeholder="Password" value="">
//<span class="error"><?php echo $companyError;?></span><br>

<input class="input" type="password" name="password2" placeholder="Re-type Password" value="">
//<span class="error">*<?php echo $phoneError;?></span><br>

</p>
<input class="submit" type="submit" name="submit" value="Submit">
//<span class="success"><?php echo $successMessage;?></span><br>
</form>

<form action="signup.php">
    <input type="submit" value="Home">
</form>

</div>
</div>
</body>
</html>