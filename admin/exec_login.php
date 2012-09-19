<?php
// Connect to server and select databse.
mysql_connect(
	$server = "localhost",
	$username = "root",
	$password = "root"
) or die(mysql_error());
mysql_select_db("hackability") or die(mysql_error());

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:edit.php");
}
else {
header("location:index.php?e=Wrong Username or Password");
}
?>