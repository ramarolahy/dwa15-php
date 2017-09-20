<?php

require('Cipher.php');

use DWA\Cipher;

# Used in the display to check the appropriate radio button
$checkVowels = 'CHECKED';
$checkShift = '';

if (!empty($_GET)) {
    # Get data from the form
    $message = $_GET['message'];
    $type = $_GET['type'];

    if ($type == 'vowels') {
        $checkVowels = 'CHECKED';
    } else {
        $checkShift = 'CHECKED';
    }

    # Instantiate a new Cipher object
    $cipher = new Cipher($type);

    # Use the object to encode the message
    $results = $cipher->encode($message);
}
