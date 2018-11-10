<?php
function test($arg)
{
    return strlen($arg);
}

$privet = test('Privet');
if ($privet > 5) {
    echo 'Большой привет';
}




echo PHP_EOL;