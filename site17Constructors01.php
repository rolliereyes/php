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

    function __construct($aTitle, $aAuthor, $aPages){
      $this->title = $aTitle;
      $this->author = $aAuthor;
      $this->pages = $aPages;

    }

  }

  $book1 = new Book("Harry Potter", "JK Rowlings", 400);
  $book2 = new Book("The Greate One", "Ronwaldo Zee", 700);

  echo $book1->title;

 ?>

</body>
</html>
