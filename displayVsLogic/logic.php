<?php
require('../helpers.php');

if (isset($_GET['answer'])) {
    $answer = strtolower($_GET['answer']);

    if (in_array($answer, ['red', 'yellow', 'green'])) {
        $correct = true;
    } else {
        $correct = false;
    }
}
