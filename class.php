<?php
class Book{
    var $title;
    var $author;
    var $pages;
  
}
$book1 = new Book;
$book1->title = 'Harry Potter';
$book1->author = 'jk rowling';
$book1->pages = 200;
echo $book1->title .'<br>';
echo $book1->author.'<br>';
echo $book1->pages.'<br>';
?>