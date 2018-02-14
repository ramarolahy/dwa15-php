<?php
require('Cipher.php');

use DWA\Cipher;

if (!empty($_GET)) {
    # Get data from the form
    $message = $_GET['message'];
    $type = $_GET['type'];

    # Instantiate a new Cipher object
    $cipher = new Cipher($type);

    # Use the object to encode the message
    $results = $cipher->encode($message);
}
