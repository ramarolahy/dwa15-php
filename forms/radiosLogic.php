<?
require('../helpers.php');

if ($_POST) {
    $_POST = sanitize($_POST);
    dump($_POST); # Output from logic, only for debugging purposes to see the contents of POST
}

if (isset($_POST['day'])) {
    $day = $_POST['day'];
} else {
    $day = 'No day was selected';
}
