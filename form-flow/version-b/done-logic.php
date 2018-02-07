<?php
# Start the session
session_start();

# Check that we have data to work with; if not, send them back to search page
if (!isset($_SESSION['searchTerm'])) {
    header('Location: index.php');
}

# Extract data from the session
$books = $_SESSION['books'] ?? null;
$haveBooks = $_SESSION['haveBooks'] ?? null;
$searchTerm = $_SESSION['searchTerm'] ?? null;

session_unset();