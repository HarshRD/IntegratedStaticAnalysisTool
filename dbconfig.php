<?php
require "init.php";
$username = $_POST["username"];
$password1 = $_POST["password"];

$sql_query = "select username from user1 where username like '$username' and password1 like '$password1';";
$result = mysqli_query($conn,$sql_query);

if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_assoc($result);
	$name = $row["username"];
	echo "Hello Welcome ".$name;
}
else
{
	echo "No info is available";
}
?>