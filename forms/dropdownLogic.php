<?php
require('../helpers.php');

if ($_POST) {
    dump($_POST); # Output from logic, only for debugging purposes to see the contents of POST
}

$day = '';

if (isset($_POST['day'])) {
    $day = $_POST['day'];

    if ($day == 'choose') {
        $alertType = 'alert-danger';
        $results = 'Please choose a day.';
    } else {
        $alertType = 'alert-info';
        $results = 'You chose '.$day;
    }
}
