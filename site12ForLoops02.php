<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
  $luckyNumbers = array (2, 3, 5, 6, 88, 15);
  for ($i = 0; $i < count($luckyNumbers); $i++){
    echo "$luckyNumbers[$i] <br>";

  }

 ?>


</body>
</html>
