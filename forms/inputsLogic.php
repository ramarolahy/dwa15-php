<?php

require('../tools.php');

if($_POST) {
    dump($_POST); # Output from logic, only for debugging purposes to see the contents of POST
}

# Simulate a user id to store in the hidden field
$userId = rand(0,100);
