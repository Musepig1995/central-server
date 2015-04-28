<!DOCTYPE html>
<html>
<head>
	<title>Blip - Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="loginstyling.css">
	<link rel="icon" type="image/png" href="favicon.ico">
</head>

<body>
	<div id="main">
		<img src="logobright.png" alt="logo" class="image">
		<div class="well well-lg">
			<br>

			<form action="login.php" method="POST">			

				<div class="input-group">
					<span class="input-group-addon">Username</span>
					<input type="text" class="form-control" name="username">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Password &nbsp;</span>
					<input type="password" class="form-control" name="password">
				</div>

				<br>
	
				<div class="btn-group login-button" role="group" aria-label="Login">
					<button type="submit" class="btn btn-primary" name="login">Login</button>
				</div>
			</form>
				
			<br>
			<br>
		</div>
	</div>
</body>
</html>
