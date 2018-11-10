<?php
$a = 'b';
$b = '123';


$ru = 'asd';
$en = 'asdddd';

function getCurrentLang() {
    $languages = ['ru', 'en'];
    return $languages[rand(0, 1)];
}
$res = getCurrentLang();
echo $$res.PHP_EOL;
//
//echo $$a; //равняется echo $b;