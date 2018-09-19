<?php
# Start the session, since we'll be using it below
session_start();

# Get the search term from the form data
$searchTerm = $_POST['searchTerm'] ?? false;

# Load the book data
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

# Store our data in the session
$_SESSION['results'] = [
    'books' => $books,
    'haveBooks' => $haveBooks,
    'searchTerm' => $searchTerm,
];

# Redirect visitor to confirmation page
header('Location: done.php');

# IMPORTANT: Nothing can echo/output to the page in this script; 
# doing so will interfere with the sessions and redirect