<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<form method="post" action="#">
Please enter your age:  <br />
<input type="number" name="age" /><br>
Please enter price: <br>
<input type ="number" name = "price"/>
<p />
<input type="submit" name="submit" value="Go" />
</form>
<?php
if (isset($_POST['submit'])){ 
$age = $_POST["age"];
$price = $_POST["price"];
if ($age <= 6 || $age >= 65){
 $price = $price /2;
 echo 'The price is ' .$price;}
else {
echo 'The price is ' .$price;
}
}
?>
</body>
</html>