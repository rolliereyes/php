<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<form action="site03checkbox.php" method="post">
  Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
  Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
  Pears: <input type="checkbox" name="fruits[]" value="pears"><br>


  <input type="submit" value="Submitna">

</form>

<?php
$fruits = $_POST["fruits"];
echo $fruits[2];


?>




</body>
</html>
