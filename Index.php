
<!DOCTYPE html>
<?php
<html>
	<head>
		<title>Register.php</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<a href="Login.php">Login</a><br>
		<a href="Index.php">Register</a><br>
		<br>
		<form method="POST" action="dbconfig.php">
			<label>First Name:</label>
			<input type="text" name="f_name"><br>
			<br>
			<label>Last Name:&nbsp;</label>
			<input type="text" name="l_name"><br>
			<br>
			<label>Username:&nbsp;&nbsp;</label>
			<input type="text" name="username"><br>
			<br>
			<label>Password:&nbsp;&nbsp;&nbsp;</label>
			<input type="password" name="password"><br>
			<br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html> 
?>