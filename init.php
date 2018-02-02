<?php
$db_name = "harshuser";
$mysql_user = "harshrd";
$mysql_pass = "harshrd123";
$servername = "secureass.cqqhn0afqam6.us-east-2.rds.amazonaws.com";

$con = mysqli_connect($servername,$mysql_user,$mysql_pass,$db_name);
if (!$con) {
   echo "<h3>Database connection Error...</h3>";
} 
else
{
	echo "<h3>Database connection Success...</h3>";
}