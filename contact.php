<?php

$name	 = $_POST['namee'];
$contact = $_POST['contactt'];
$email	 = $_POST['emaill'];
$country = $_POST['countryy'];
$subject = $_POST['subjectt'];

$name	 = stripcslashes($name);
$contact = stripcslashes($contact);
$email	 = stripcslashes($email);
$country = stripcslashes($country);
$subject = stripcslashes($subject);

$name	 = mysql_real_escape_string($name);
$contact = mysql_real_escape_string($contact);
$email	 = mysql_real_escape_string($email);
$country = mysql_real_escape_string($country);
$subject = mysql_real_escape_string($subject);

$dbname = "tours";


mysql_connect("localhost", "root", "" );
mysql_select_db($dbname);

$sql = " insert into contactus (name , contact, email, country, subject) values( '$name', '$contact', '$email', '$country', '$subject')  ";
$result = mysql_query($sql) or die("Failed to query database".mysql_error()) ;

echo "REQUEST REGISTERED !! \n We will be reaching you soon....   :)";

?>
<html>
<body>
	<h3>Return back to Login page.</h3>
	<a href="login.html">ClickHere</a>
</html>