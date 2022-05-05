<?php
	$today = date('Y-m-d');
?>
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
			<input type="hidden" name="user_id" id="user-id" value="1234">
		</div>

		<div>
			<label for="fav_brand">Favourite Brand:</label>
			<input type="text" name="fav_brand" list="brands" id="fav_brand" placeholder="Type Your Favourite PC Brand">
			<datalist id="brands">
				<option value="Dell"></option>
				<option value="Lenovo"></option>
				<option value="HP"></option>
				<option value="Apple"></option>
			</datalist>
		</div>	

		<div>
			<label for="favcolor">Favourite Color?</label>
			<input type="color" name="favcolor" id="favcolor">
		</div>

		<div>
			<label for=""></label>
			<input type="image" src="img/send.png" alt="Send Message" name="send_btn">
		</div>

		<div>
			<label for=""></label>
			<button type="submit" name="submit">Submit</button>
		</div>

	</form>
	<script src="js/script.js"></script>
</body>
</html>