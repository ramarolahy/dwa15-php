<?php
require('../includes/helpers.php');

$day = $_GET['day'] ?? null;

if ($day) {

    if ($day == 'choose') {
        $alertType = 'alert-danger';
        $results = 'Please choose a day.';
    } else {
        $alertType = 'alert-info';
        $results = 'You chose '.$day;
    }
}
