<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Forms</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<h1>Web Forms</h1>

	<form action="process-form.php" method="post" onsubmit="return validateForm();">
		
		<div>
			<label for="email">Email Address:</label>
			<input type="email" name="email" id="email" placeholder="Type your email address" autofocus required>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="Type new password" required>
		</div>

		<div>
			<label for=""></label>
			<input type="submit" value="Sign Up" name="submit">	
		</div>

		


	</form>
	<script src="js/script.js"></script>
</body>
</html>