<?
require '../includes/helpers.php';

if ($_GET) {
    dump($_GET); # Output from logic, only for debugging purposes to see the contents of POST
}

if (isset($_GET['day'])) {
    $day = $_GET['day'];
} else {
    $day = 'No day was selected';
}
