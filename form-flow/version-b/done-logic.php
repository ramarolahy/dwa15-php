<?php
# Start the session
session_start();

# Check that we have data to work with; if not, send them back to the start page
if (!isset($_SESSION['results'])) {
    header('Location: foobooks.php');
}

# Get the data from the session
$results = $_SESSION['results'] ?? null;

# Clear the session
session_unset();