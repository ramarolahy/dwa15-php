<?php

require('../tools.php');

$day = '';

if(isset($_POST['day'])) {

	$day = $_POST['day'];

    if($day == 'choose') {
        $alertType = 'alert-danger';
        $results = 'Please choose a day.';
    }
    else {
        $alertType = 'alert-info';
        $results = 'You chose '.$day;
    }
}
