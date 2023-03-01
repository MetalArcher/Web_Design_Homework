<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h2>Моля, въведете вашето име и възраст:</h2>
	<form method="post">
		<label for="name">Име:</label>
		<input type="text" name="name" id="name" required>
            <br> </br>
		<label for="age">Възраст:</label>
		<input type="number" name="age" id="age" min="1" max="150" required>

		<input type="submit" value="Изпрати">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$age = $_POST["age"];
		echo "<h3>Здравейте, " . $name . "! Вие сте на " . $age . " години.</h3>";
	}
	?>
</body>
</html>