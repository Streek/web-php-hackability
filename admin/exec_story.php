<?php
// Connect to server and select databse.
mysql_connect(
	$server = "localhost",
	$username = "root",
	$password = "root"
) or die(mysql_error());
mysql_select_db("hackability") or die(mysql_error());

session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}

mysql_query("INSERT INTO news(title, body) VALUES('{$_POST['title']}', '{$_POST['body']}')") or die(mysql_error());  

header("location:edit.php?e=Story created without issue.");
?>