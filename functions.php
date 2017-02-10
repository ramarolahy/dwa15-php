<?php

include('tools.php');

function getCelsius(int $temperature, $includeUnit = true) {

    $result = ($temperature - 32) / 1.8;

    if($includeUnit) {
        return $result .= ' C';
    }
    else {
        return $result;
    }
}

# Example usage
dump(getCelsius(75)); # string(15) "23.8888888889 C"
dump(getCelsius(75, false)); # float(23.8888888889)
