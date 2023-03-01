<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<form method="post" action="#">
Please enter first number:  <br />
<input type="number" name="firstNumber" /><br>
Please enter second number: <br>
<input type ="number" name = "secondNumber"/>
<p />
<input type="submit" name="submit" value="Go" />
</form>
<?php
if (isset($_POST['submit'])){ 
$first = $_POST["firstNumber"];
$second = $_POST["secondNumber"];
echo 'First number is: ' .$first ."<br>";
echo 'Second number is: '.$second."<br>";
}
?>
</body>
</html>