<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<form action="site08Calculator.php" method="post">
  First Number: <input type = "number" step = "0.01" name = "num1"><br>
  OP: <input type = "text" name = "OP"> <br>
  Second Number: <input type = "number" name = "num2"><br>
  <input type = "Submit">
</form>

<?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $OP = $_POST["OP"];

if ($OP == "+") {
  echo $num1 + $num2;
} elseif ($OP == "-"){
  echo $num1 - $num2;
} elseif ($OP == "*"){
  echo $num1 * $num2;
} elseif ($OP == "/"){
  echo $num1 / $num2;
} else {
  echo "invalid Operator eh";
}

 ?>


</body>
</html>
