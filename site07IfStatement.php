<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall){
      echo "You are a tall male.";
    } elseif ($isMale && !$isTall) {
      echo "You are short male.";
    } elseif (!$isMale && $isTall) {
      echo "You are not male but are tall.";
    } else {
      echo "You are not a tall male.";

    }


 ?>




</body>
</html>
