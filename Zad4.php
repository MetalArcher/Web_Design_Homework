<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="name">Enter your name:</label>
		<input type="text" name="name" id="name" required>
		<input type="submit" value="Submit">
	</form>

	<?php
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			echo "<p>Your name is $name.</p>";
		}
	?>
</body>
</html>
