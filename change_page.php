<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

	 

	<fieldset>
		<legend>Change Password</legend>
		<form action="change_pass.php" method="post">
			<input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>"> <br>

			Current Password <br>
			<input type="Password" name="oldpassword"> <br>
			New Password <br>
			<input type="Password" name="password"> <br> 
			Retype New Password <br>
			<input type="Password" name="newpassword"> <br> 
			<br>
			<input type="submit" name="submit" value="Login">

			
	 </form>
	</fieldset>
</body>
</html>