<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>Find solution for ax^2 + bx + c:  <br />
<body>
<form method="post" action="#">
a  = 
<input type="number" name="a" /><br>
b = 
<input type ="number" name = "b"/><br>
c = 
<input type="number" name="c">
<p />
<input type="submit" name="submit" value="Find X" />
</form>
<?php
if (isset($_POST['submit'])){ 
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$D = pow($b,2) - 4*$a*$c;
if($D <0){
	echo 'No solution';
}elseif($D == 0){
  $x = -$b / (2*$a);
	echo 'x =' .$x;
}else{

	$x1 = (-$b - sqrt($D))/(2*$a);
	$x2 = (-$b + sqrt($D))/(2*$a);
	echo 'x1 = '.round($x1,2) .'<br>';
	echo 'x2 = '.round($x2,2);
}
}
?>
</body>
</html>