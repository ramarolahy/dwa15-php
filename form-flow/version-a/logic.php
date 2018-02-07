<?php
$searchTerm = $_GET['searchTerm'] ?? false;

$booksJson = file_get_contents('../../books.json');
$books = json_decode($booksJson, true);

# Loop through the book data, looking for matches to our search term
foreach ($books as $title => $book) {
    if ($title != $searchTerm) {
        unset($books[$title]);
    }
}

# Boolean as to whether we found any books
$haveBooks = count($books) > 0;