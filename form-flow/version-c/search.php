<?php
session_start();

$searchTerm = $_GET['searchTerm'] ?? false;

if ($searchTerm) {
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
}

# Store our results in the session
$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'haveBooks' => $haveBooks, 
    'books' => $books
];

# Redirect the user page to the page that shows the form
header('Location: foobooks.php');