<?php
require('../includes/helpers.php');

$submitted = $_GET['submitted'] ?? false;
$days = isset($_GET['days']) ? $_GET['days'] : null;

if(!$submitted) {
    $results = '';
} elseif (!$days) {
    $results = 'No days were selected';
    $alertType = 'alert-danger';
} else {
    $results = 'Days chosen: ';
    $alertType = 'alert-info';

    foreach ($days as $day) {
        $results .= $day . ', ';
    }

    # Remove trailing comma
    $results = rtrim($results, ', ');
}
