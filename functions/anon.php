<?php

$asd = 123;
$x = 1234;
$anon = function ($a) use ($asd, $x) {
    return $asd.$x.$a;
};

echo $anon(1);
//
//array_map($anon, $array);
//array_map($anon, $array);
//array_map($anon, $array);
//array_map($anon, $array);

$array = [
    1,
    2,
    3
];
$anon = function ($item) {
    return $item * 10;
};
$newArray = array_map($anon, $array);

echo '<pre>';
print_r($newArray);
die();


if ($x > 1) {
    function calcX($x)
    {
        return $x * 1000;
    }
} else {
    function calcX($x)
    {
        return $x / 1000;
    }
}
echo calcX($x);


