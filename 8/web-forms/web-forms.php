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

	<form action="process-form.php" method="post" enctype="multipart/form-data">
		
		<div>
			<label for="search">Search:</label>
			<input type="search" name="search" id="search" maxlength="15" minlength="4" readonly value="This is read only" disabled>
		</div>

		<div>
			<label for="memo">Memo:</label>
			<textarea name="memo" id="memo" cols="30" rows="10">Please type your memo here.</textarea>
		</div>

		<div>
			<label for="gender">Gender:</label>
			<select name="gender[]" id="gender" required>
				<option value="">Please select</option>
				<option value="M" selected>Male</option>				
				<option value="F">Female</option>
			</select>
		</div>

		<div>
			<label for="myfile">Upload File:</label>
			<input type="file" name="myfile" id="myfile">
		</div>

		<div>
			<label for=""></label>
			<button type="submit" name="submit">Submit</button>
		</div>

	</form>
	<script src="js/script.js"></script>
</body>
</html>