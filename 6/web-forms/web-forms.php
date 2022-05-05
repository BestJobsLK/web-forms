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
			<label for="mydate">Date:</label>
			<input type="date" name="mydate" id="mydate" 
			  min="<?php echo $today; ?>" max="2020-04-20">
		</div>

		<div>
			<label for="mytime">Time:</label>
			<input type="time" name="mytime" id="mytime">
		</div>		

		<div>
			<label for="mymonth">Month:</label>
			<input type="month" name="mymonth" id="mymonth">
		</div>

		<div>
			<label for="myweek">Week:</label>
			<input type="week" name="myweek" id="myweek">
		</div>

		<div>
			<label for=""></label>
			<button type="submit" name="submit">Submit</button>
		</div>

	</form>
	<script src="js/script.js"></script>
</body>
</html>