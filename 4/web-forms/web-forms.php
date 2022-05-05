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
		
		<h3>Gender:</h3>
		
		<div>			
			<label for="male"><input type="radio" name="gender" id="male" value="male" checked> Male</label>
		</div>

		<div>			
			<label for="female"><input type="radio" name="gender" id="female" value="female"> Female</label>
		</div>

		<h3>Favourite Subject:</h3>

		<div>
			<input type="checkbox" name="subject[]" id="html" value="html">
			<label for="html">HTML</label>
		</div>

		<div>
			<input type="checkbox" name="subject[]" id="css" value="css" checked>
			<label for="css">CSS</label>
		</div>

		<div>
			<input type="checkbox" name="subject[]" id="php" value="php">
			<label for="php">PHP</label>
		</div>

		<div>
			<input type="checkbox" name="subject[]" id="js" value="js">
			<label for="js">JavaScript</label>
		</div>

		<div>
			<button type="submit" name="submit">Submit</button>
		</div>

	</form>
	<script src="js/script.js"></script>
</body>
</html>