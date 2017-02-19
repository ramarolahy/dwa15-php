<?php

require('tools.php');

dump($_POST);

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
