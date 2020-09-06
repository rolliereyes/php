<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<form action="site09Switch.php" method="post">

    What was your grade?
    <input type = "text" name = "grade">
    <input type = "Submit">
</form>

<?php
$grade = $_POST ["grade"];
switch ($grade) {
  case 'A':
    echo "You did amazing!";
    break;
  case 'B+':
    echo "You did pretty good!";
    break;
  case 'C':
    echo "You did just fine!";
    break;
  case 'D':
    echo "You failed!";
    break;
  default:
    echo "Wrong value eh";
    break;
}


 ?>


</body>
</html>
