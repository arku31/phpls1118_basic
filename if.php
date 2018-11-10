<pre>
<?php
$a = 2;

$a = '1';
$b = 1;

//$a равняется b, a == b
//$a не равняется b, a === b

//2 != 1; 2 не равно 1, 2 !== '2'

if ($a === 1) {
//    echo $a++;
} elseif ($a % 2 == 0) {
//    echo ++$a;
} else {
//    echo 'какоето вообще число';
}

$result = $a == 1 ? 'один' : 'yt jlby';

$result = ($a == 1) ? 'один' : 'не один';

//echo $result;

switch ($a) {
//    default:
//        echo "не один и не два";
//        break;
    case 1:
    case 25:
    case 10:
    default:
//    default:
        echo 'один';
        break;
    case 2:
        echo "два";
        break;
}

$db = [
    'name' => 'Игорь',
    'birthday' => '24.02'
];

$peremennaya[0] = "asd";
$peremennaya[1][0][0] = 123;
$peremennaya[1][0][2] = 123;
$peremennaya[3] = $peremennaya;
print_r($peremennaya);


$bbb[0] = '123';
$bbb[2] = 123;
$bbb[] = 'sdfgsdf';
$bbb[] = $bbb;
$bbb['user']['name'] = "Igor";
$bbb['user']['surname'] = "T";

print_r($bbb);
echo count($bbb['user']); //.length


$str = explode('.', '1.2.3');
$str = implode(',', $str);
print_r($str);
