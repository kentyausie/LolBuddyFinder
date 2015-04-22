<?php
//Connect to the Database
require("config.php");
//query to create the Table
mysql_query("CREATE TABLE messages(
 to_user VARCHAR(30),
 from_user VARCHAR(30),
 deleted VARCHAR(3) DEFAULT no,
 sent_deleted VARCHAR(3) DEFAULT no, 
 message VARCHAR(1000))")
 or die(mysql_error());  

echo "Table Created!";

?>
