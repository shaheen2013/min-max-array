<?php

function minMax($array) {
    $min = min($array);
    $max = max($array);
    $odd = 0;
    foreach ($array as $value) {
        if ($value % 2 != 0) {
            $odd++;
        }
    }
    echo "Minimum: $min<br>Maximum: $max<br>Number of odd numbers: $odd";
}

minMax([12, 25, 13, 4, 15, 60, 7, 81, 19, 10]);