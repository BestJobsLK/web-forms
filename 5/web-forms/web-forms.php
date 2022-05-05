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
		<h3>Number Input</h3>		

		<div>
			<label for="score">Enter the score:</label>
			<input type="number" name="score" id="score" min="0" max="100" step="5">
		</div>

		<h3>Telephone Input</h3>
		<div>
			<label for="telephone">Telephone Number:</label>
			<input type="tel" name="telephone" id="telephone" placeholder="077-123-1234" 
				pattern="[0]{1}[7]{2}-[0-9]{3}-[0-9]{4}">
		</div>

		<h3>Range Input</h3>
		<div>
			<label for="volume">Set Volume</label>
			<input type="range" name="volume" id="volume" min="0" max="50">
		</div>

		<div>
			<label for=""></label>
			<button type="submit" name="submit">Submit</button>
		</div>

	</form>
	<script src="js/script.js"></script>
</body>
</html>