<?php
session_start();

$results = $_SESSION['results'] ?? null;

if($results) {
    # Extract the data from the results array into variables
    extract($results);
}

session_unset();