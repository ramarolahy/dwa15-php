<?php

function example1() {
    $i = 0;
    $results = '';

    while($i < 10) {
        $results .= $i.' ';
        $i++;
    }

    var_dump($results); # Output: string(20) "0 1 2 3 4 5 6 7 8 9 "
}
#example1();

function example2() {

    $results = '';

    for($i = 0; $i < 10; $i++) {
        $results .= $i.' ';
    }

    var_dump($results); # Output: string(20) "0 1 2 3 4 5 6 7 8 9 "
}
#example2();


function example3() {
    $translations =
    [
        'hello' => 'hola',
        'goodbye' => 'adios',
    ];

    foreach($translations as $englishWord => $spanishWord) {
        echo $englishWord.' in Spanish is '.$spanishWord.'<br>';
    }
}
#example3();


function example4() {
    $results = '';

    $randomNumbers = [45, 67, 33, 56, 42, 100, 67];

    foreach($randomNumbers as $index => $number) {

        if($number % 2 == 0) {
            break;
        }
        $results .= $number.' ';

    }
    var_dump($results); # string(9) "45 67 33 "
}
//example4();



function example5() {
    $results = '';

    $randomNumbers = [45, 67, 33, 56, 42, 100, 67];

    foreach($randomNumbers as $index => $number) {

        if($number % 2 == 0) {
            continue;
        }
        $results .= $number.' ';

    }
    var_dump($results); # string(12) "45 67 33 67 "
}
example5();
