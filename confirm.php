<!DOCTYPE HTML>
<html>
<?php session_start(); 
$name = $_SESSION['name'];?>

<label>Confirm</label>
<label><?php echo $_SESSION['name'] ?></label>
</html>