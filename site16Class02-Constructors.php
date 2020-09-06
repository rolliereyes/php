<!DOCTYPE html>
<html>
<head>
<title>Page Title ko php</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

<?php
  class Book {
    var $title;
    var $author;
    var $pages;



  }

  $book1 = new Book;
  $book1->title = "Harry Potter";
  $book1->author = "JK Rowlings";
  $book1->pages = 400;

  $book2 = new Book;
  $book2->title = "The Great Depression";
  $book2->author = "Ronwaldo Zee";
  $book2->pages = 700;

  echo $book1->title;
  echo "<br>";
  echo $book2->author;


 ?>

</body>
</html>
