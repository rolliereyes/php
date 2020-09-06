<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
    function getMax ($num1, $num2, $num3) {
      if ($num1 >= $num2 && $num1 >= $num3){
        return $num1;
      } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
      } else {
        return $num3;
      }

    }

    echo getMax (12, 55, 200);

 ?>




</body>
</html>
