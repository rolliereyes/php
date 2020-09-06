<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
  class Chef {
    function makeChicken(){
      echo "The chef makes chicken <br>";
    }
    function makeSalad(){
      echo "The chef makes salad <br>";
    }
    function makeSpecialDish(){
      echo "The chef makes bbq ribs <br>";
    }
  }

  class ItalianChef extends Chef {
    function makePasta(){
      echo "The Italian can make pasta and of course chicken too.";
    }
  }



  $chef = new Chef();
  $chef->makeChicken();

  $italianChef = new ItalianChef();
  $italianChef->makePasta();

 ?>



</body>
</html>
