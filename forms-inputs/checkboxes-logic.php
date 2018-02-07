<?php
require '../includes/helpers.php';

if ($_GET) {
    dump($_GET); # Output from logic, only for debugging purposes to see the contents of POST
}

# If no days were checked...
if (!isset($_GET['days'])) {
    $results = 'No days were selected';
    $alertType = 'alert-danger';
} else {
    $results = 'Days chosen: ';

    $alertType = 'alert-info';

    foreach ($_GET['days'] as $day) {
        $results .= $day.', ';
    }

    # Remove trailing comma
    $results = rtrim($results, ', ');
}
