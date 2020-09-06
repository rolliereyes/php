<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
  $index = 1;
  while ($index <=5){
    echo "$index <br>";
    $index++;
  }

// for Loop is basically same above which is while Loop
echo " for loop is here <br>";

  for ($i = 1; $i <= 5; $i++){
    echo "$i <br>";

  }

 ?>


</body>
</html>
