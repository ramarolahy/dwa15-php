<?php

require('helpers.php');

if (isset($_COOKIE['recentSearch'])) {
    $recentSearch = $_COOKIE['recentSearch'];
} else {
    $recentSearch = '';
}

setcookie('recentSearch', $_POST['searchTerm']);

dump('You recently searched for: '.$recentSearch);
dump('You just searched for: '.$_POST['searchTerm']);
