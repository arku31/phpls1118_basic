<?php
function formString($year = 2018, $month = 1, $day = 1) {
    return 'hi from '.$year.$month.$day.PHP_EOL;
}

if (1 == 1) {
    $result = formString();
    echo str_replace('hi', 'hello', $result);
}