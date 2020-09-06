<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<form action="site04associativeArray.php" method="post">
  <input type="text" name="students"><br>

  <input type="submit" value="Submitna">

</form>

<?php
$grades = array ("oscar"=>"A+", "Pam"=>"B-", "nick"=>"c+", "Ando"=>"A");
echo $grades [$_POST["students"]];


?>




</body>
</html>
