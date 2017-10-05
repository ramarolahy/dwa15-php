<?php
require('helpers.php');
require('Cipher.php');

use DWA\Cipher;

$cipherA = new Cipher('shift');
dump('Hello World = '.$cipherA->encode('Hello World'));
dump('zoo = '.$cipherA->encode('zoo'));

$cipherB = new Cipher('vowels');
dump('Hello World = '.$cipherB->encode('Hello World'));
dump('zoo = '.$cipherB->encode('zoo'));

# Cipher method does not exist
try {
    $cipherB = new Cipher('xyz');
} catch (Exception $e) {
    dump($e->getMessage());
}
