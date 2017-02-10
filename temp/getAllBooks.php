<?php

require('../tools.php');

$bookJson = file_get_contents('books.json');
$books = json_decode($bookJson, true);
