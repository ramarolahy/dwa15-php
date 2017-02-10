<?php

require('tools.php');
require('Book.php');

$book = new Book();
$book->title = 'The Great Gatsby';
$book->author = 'F. Scott Fitzgerald';
$book->publishedDate = 1925;

dump($book->getSummary()); # string(73) "The Great Gatsby was written by F. Scott Fitzgerald and published in 1925"
