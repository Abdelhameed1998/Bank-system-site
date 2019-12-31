<?php

$username = $_POST['username'];
$password = $_POST['password'];

$username= stripcslashes($username);
$password= stripcslashes($password);

$username=mysql_real_escape_string($username);	
$password=mysql_real_escape_string($password);


mysql_connect("localhost", "root","");
mysql_select_db("bankusers");

$result = mysql_query("select * from register where username = '$username' and password = '$password'")
 	or die ("Faild to query database" .msql_error());

 	$row = mysql_fetch_array($result);
 	if ($row['username'] == $username && $row['password'] == $password)
 	{
 		echo "done";
 	}
 	else 
 	{
 		echo "field";
 	}
?>
