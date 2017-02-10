<?php

require('tools.php');

$translations =
[
    'hello' => 'hola',
    'goodbye' => 'adios',
];

$translations['good afternoon'] = 'buenas tardes';

$phrases = [
    'hola',
    'adios',
    'hasta luego',
    'por favor',
    'de nada',
];

$mixedBag = [
    False, # Booleans
    4.0, # Floats
    1, # Integers
    ['a', 'b', 'c'] # Even other Arrays!
];

$countries = [
    'US' => [
        'name' => 'United States',
        'languages' => ['English'],
    ],
    'CA' => [
        'name' => 'Canada',
        'languages' => ['English', 'French'],
    ],
    'MX' => [
        'name' => 'Mexico',
        'languages' => ['Spanish'],
    ],
];



# Update the array so that all the country names are uppercase
foreach($countries as $countryCode => &$country) {
    $country['name'] = strtoupper($country['name']);
}

dump($countries);
