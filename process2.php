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

$sql = "insert into logindetails (username,password) values('$username','$password');  ";
$result = mysql_query($sql) or die("Failed to query database".mysql_error()) ;

echo "Successfull Registered" ;
include("login.php");

?>