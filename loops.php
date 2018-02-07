<?php
require('includes/helpers.php');

$results = '';

$randomNumbers = [45, 67, 33, 56, 42, 100, 67];

foreach ($randomNumbers as $index => $number) {
    if ($number % 2 == 0) {
        continue;
    }
    $results .= $number . ' ';
}
dump($results); # string(12) "45 67 33 67 "
