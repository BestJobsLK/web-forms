<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Forms</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<h1>Web Forms</h1>

	<form action="process-form.php" method="post">
		
		<div>
			<label for="email">Email Address:</label>
			<input type="text" name="email" id="email" placeholder="Type your email address" autofocus>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="Type new password">
		</div>

		<div>
			<label for=""></label>
			<input type="submit" value="Sign Up" name="submit">	
		</div>

		


	</form>
</body>
</html>