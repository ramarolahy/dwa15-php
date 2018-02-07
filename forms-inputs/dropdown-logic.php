<?php
require '../includes/helpers.php';

if ($_GET) {
    dump($_GET); # Output from logic, only for debugging purposes to see the contents of POST
}

$day = '';

if (isset($_GET['day'])) {
    $day = $_GET['day'];

    if ($day == 'choose') {
        $alertType = 'alert-danger';
        $results = 'Please choose a day.';
    } else {
        $alertType = 'alert-info';
        $results = 'You chose '.$day;
    }
}
