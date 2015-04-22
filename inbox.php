<?php
session_start();
require("config.php");

$user = $_SESSION['user'];

if (isset($_POST['view_old'])) {
$user = $_SESSION['user'];
$query = mysql_query("SELECT * FROM messages WHERE to_user = '$user' AND deleted = 'no'")or die(mysql_error());
while($row2 = mysql_fetch_array($query))
{ 
  echo "<table border=1>";
  echo "<tr><td>";
  echo "Message ID#: ";
  echo $row2['id'];
  echo "</td></tr>";
  echo "<tr><td>";
  echo "To: ";
  echo $row2['to_user'];
  echo "</td></tr>";
  echo "<tr><td>";
  echo "From: ";
  echo $row2['from_user'];
  echo " ";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "Message: ";
  echo bb ($row2['message']);
  echo "</td></tr>";
  echo "</br>";
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table border="0">
<tr><td colspan=2></td></tr>
<tr><td></td><td>
<input type="hidden" name="id" maxlength="32" value = "<?php echo $row2['id']; ?>">
</td></tr>
<tr><td colspan="2" align="right">
<input type="submit" name="delete" value="Delete PM # <?php echo $row2['id']; ?>">
</td></tr>
</table>
</form>
<?php
}
}

if (isset($_POST['delete'])) {
$id = $_POST['id'];
$user = $_SESSION['username'];
$sql = mysql_query("UPDATE messages SET deleted = 'yes' WHERE id = '$id' AND to_user = '$user'")or die(mysql_error());
echo "Your message has been succesfully deleted.";
}

$sql = mysql_query("SELECT * FROM messages WHERE to_user = '$_SESSION[username]'")or die(mysql_error());
while($row = mysql_fetch_array($sql))
{ 
$user = $_SESSION['user'];
  echo "<table border=1>";
  echo "<tr><td>";
  echo "Message ID#: ";
  echo $row[id];
  echo "</td></tr>";
  echo "<tr><td>";
  echo "To: ";
  echo $row[to_user];
  echo "</td></tr>";
  echo "<tr><td>";
  echo "From: ";
  echo $row[from_user];
  echo "</td></tr>";
  echo "<tr><td>";
  echo "Message: ";
  echo $row[message];
  echo "</td></tr>";
  echo "</br>";
  mysql_query("UPDATE messages SET read_yet = 'yes' WHERE to_user = '$user' AND id ='$row_id'")or die(mysql_error());
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table border="0">
<tr><td colspan=2></td></tr>
<tr><td></td><td>
<input type="hidden" name="id" maxlength="32" value = "<?php echo $row['id']; ?>">
</td></tr>
<tr><td colspan="2" align="right">
<input type="submit" name="delete" value="Delete PM # <?php echo $row['id']; ?>">
</td></tr>
</table>
</form>

<?

}
echo "</table>";
?>
