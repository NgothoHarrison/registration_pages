<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>login</title>
</head>
	
<body>
<div class="box">
	<form action="verify.php" method="post">
	<div class="form">
		<h2>Sign In</h2>
		<div class="inputBox">
			<input type="text" name="Username" required>
			<span>Username</span>
			<i></i>
		</div>
		
		<div class="inputBox">
			<input type="password" name="Password" required>
			<span>Password</span>
			<i></i>
		</div>
		
		<div class="links">
			<a href="trial.php"> Forgot Password</a>
			<a href="signup.php"> SignUp</a>
		</div>
		<input type="submit" name="" value="Login">

	
		
	</div>
</div>
</body>
</html>




