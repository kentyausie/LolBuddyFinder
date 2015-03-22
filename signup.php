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
<title>PHP Contact Form with Validation</title>
</head>
<body>
<div class="container">
<div class="main">
<h2>PHP Contact Form with Validation</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p class="box">
<input class="input" type="text" name="sumName" placeholder="Summoner Name" value="">
<span class="error">*<?php echo $fnameError;?></span><br>

<input class="email" type="text" name="email" placeholder="email" value="">
<span class="error">*<?php echo $lnameError;?></span><br>

<input class="input" type="text" name="company" value="">
<span class="error"><?php echo $companyError;?></span><br>
<label>Phone :</label>
<input class="input" type="text" name="phone" value="">
<span class="error">*<?php echo $phoneError;?></span><br>
<label>Email :</label>
<input class="input" type="email" name="email" value="">
<span class="error">*<?php echo $emailError;?></span><br>
<label>Website :</label>
<input class="input" type="url" name="website" value="">
<span class="error"><?php echo $websiteError;?></span><br>
<label>Address 1 :</label>
<input class="input" type="text" name="address1" value="">
<span class="error">*<?php echo $address1Error;?></span><br>
<label>Address 2 :</label>
<input class="input" type="text" name="address2" value="">
<span class="error"><?php echo $address2Error;?></span><br>
<label>City :</label>
<input class="input" type="text" name="city" value="">
<span class="error">*<?php echo $cityError;?></span><br>
<label>Province :</label> <select name="province">
                        <option value="Select" disabled>Select</option>
                        <option value="AB">AB</option>
                        <option value="BC">BC</option>
                        <option value="MB">MB</option>
                        <option value="NB">NB</option>
                        <option value="NL">NL</option>
                        <option value="NS">NS</option>
                        <option value="NT">NT</option>
                        <option value="NU">NU</option>
                        <option value="ON">ON</option>
                        <option value="PE">PE</option>
                        <option value="QC">QC</option>
                        <option value="SK">SK</option>
                        <option value="YT">YT</option>

                        </select><span class="error">*<?php echo $provinceError;?></span><br>
</p>
<input class="submit" type="submit" name="submit" value="Submit">
<span class="success"><?php echo $successMessage;?></span><br>
</form>

<form action="SQLindex.html">
    <input type="submit" value="Home">
</form>

</div>
</div>
</body>
</html>