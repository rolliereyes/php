<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
$friends = array ("tom", "freddie", "oscar");
$friends[2] = "dwight";
echo $friends [2];
echo "<br>";
echo count ($friends);
?>




</body>
</html>
