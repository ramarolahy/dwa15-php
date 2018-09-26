<?php
require 'Cipher.php';

use DWA\Cipher;

session_start();

if (!empty($_GET)) {
    # Get data from the form
    $message = $_GET['message'];
    $type = $_GET['type'];

    # Instantiate a new Cipher object
    $cipher = new Cipher($type);

    # Use the object to encode the message
    $encodedMessage = $cipher->encode($message);

    $_SESSION['results'] = [
        'encodedMessage' => $encodedMessage,
        'type' => $type,
        'message' => $message,
    ];

    header('Location: index.php');
}
