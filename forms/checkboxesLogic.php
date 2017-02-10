<?php

require('../tools.php');

if($_POST) {
    $_POST = sanitize($_POST);
}

# If no days were checked...
if(!isset($_POST['days'])) {
    $results = 'No days were selected';
    $alertType = 'alert-danger';
}
# If days were checked...
else {

    $results = 'Days chosen: ';

    $alertType = 'alert-info';

    foreach($_POST['days'] as $day) {
        $results .= $day.', ';
    }

    # Remove trailing comma
    $results = rtrim($results, ', ');
}
