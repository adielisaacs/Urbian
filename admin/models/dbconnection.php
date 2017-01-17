<?php
$servername = "localhost:3307";
$username = "root";
$password = "adiel123";
$dbname = "toilet";

$link = mysql_connect($servername, $username, $password)  or die("Database Server is unavailable at the moment");
mysql_select_db($dbname, $link) or die("Database is unavailable at the moment");
 
?>