 <!DOCTYPE html>
<html> 	
	<head>
		<link rel="stylesheet" type="text/css" href="homescreen.css"> 
		<link rel="stylesheet" type="text/css" href="reset.css"> 
		<title>website</title>
	</head>

	<body>
		<div id="home-screen">
			 <h1>Home</h1>
			 <div>
				<form action="login.php" method="POST">
					<input id="username-form" type="text" value="username" placeholder="Username">
					<input id="password-form" type="text" value="password" placeholder="password">
					<input id="button-form" type="submit" value="submit">
				</form>
				<button onclick="location.href='register.php'" type="button"> Register now</button>
			 </div>
		</div>
	</body>
</html> 