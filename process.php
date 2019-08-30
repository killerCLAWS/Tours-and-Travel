<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$dbname = "tours";


mysql_connect("localhost", "root", "");
mysql_select_db($dbname);

$sql = "select * from logindetails where username= '$username' and password='$password'; ";
$result = mysql_query($sql) or die("Failed to query database".mysql_error()) ;

$row = mysql_fetch_array($result);

if($row['username']== $username && $row['password']== $password){
	include("start.html");
}
else{
	echo "Failed to Login : Either your Password or Username is Wrong.";
}

?>