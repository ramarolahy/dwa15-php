<?php
if (isset($_GET['answer'])) {
    $answer = strtolower($_GET['answer']);

    if (in_array($answer, ['red', 'yellow', 'green'])) {
        $correct = true;
    } else {
        $correct = false;
    }
}


// We want to avoid this:
// if (isset($_GET['answer'])) {
//     $answer = strtolower($_GET['answer']);
//
//     if (in_array($answer, ['red', 'yellow', 'green'])) {
//         $results = '<div class='positive'><i class="fa fa-smile-o"></i> '.sanitize($answer).' is correct!';
//     } else {
//         $results = '<div class='negative'><i class="fa fa-frown-o"></i> '.sanitize($answer).' is incorrect; please try again.';
//     }
// }
