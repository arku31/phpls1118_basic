<?php
$x = 10;

function moreAge(&$digit) //&
{
    $digit++;
    echo 'Внутри функции: '.$digit.PHP_EOL;
//    return $x;
}
//$x = moreAge($x);
moreAge($x);
echo 'Снаружи функции: '.$x.PHP_EOL;

die();