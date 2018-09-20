<?php
require '../includes/helpers.php';

# Extract form data from GET request
$submitted = $_GET['submitted'] ?? false;
$days = $_GET['days'] ?? null;

# Above 2 statements use the shortcut null coalescing operator which
# you can read about here: https://github.com/susanBuck/dwa15-fall2018/blob/master/php/syntactic-sugar.md

$results = null;

if ($submitted and $days) {
    # Loop through each day checkbox that was selected and append its value to a string
    # Note that because the `days` checkboxes were grouped together as an array (name='days[]')
    # that they are available out of the form request as an array
    foreach ($days as $day) {
        $results .= $day . ' ';
    }
}