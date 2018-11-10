<pre>
<?php
////echo 'test';
//
//echo "test" . PHP_EOL;
//
////echo ("test","test"); //ошибка
//echo("test" . "test".PHP_EOL);
//

$boolean = false;
$int = 3;
$float = 3.25;
$string = "asd$int";

$newstring = (int) $string;

$secondWay = (boolean) $string;

//echo $string.PHP_EOL;
$string = 'asd$int'.$int;
//echo $string.PHP_EOL;
echo "'";
echo PHP_EOL;
// ПУСТЬ 0 обозначает 123
//скажи значение переменной эррэй с ключом 0
// echo $array[0];
$array = [
    0 => 123,
    1 => 'abc',
    'asd' => 123,
    'arrax' => [123]
];
$array2 = [ 'asd' => 'aaa'];
$array = [123]; // 0 => 123
$array[] = 123; //отдельно
$array[11] = 123; //отдельно - первый раз встречается
$array[11] = 123; //отдельно - перезаписан

$object = new stdClass();
$object->a = 2;

//class Calc
//{
//    public function math($x, $y)
//    {
//        return $x + $y;
//    }
//}
//
//$calc = new Calc();
//echo $calc->math(1, 2);
//die();

var_dump($boolean);
echo "<br>";
var_dump($int);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);
echo "<br>";
echo "<pre>";
print_r($array);
var_dump($array2);
echo "<br>";
var_dump($object);
echo "<br>";

$string = '123asd';
$int = 1;
echo $string . $int;

//echo ($string + $integer);
//echo '<br>===============';
//$a = 0;
//echo $a++;
//echo PHP_EOL;
//echo '<br>=======<br>';
//echo $a;
//echo PHP_EOL;
//$a = 0;
//echo $a++;
//echo $a;

//$a['a'] = 123;
//echo PHP_EOL;
//echo "Stroka: {$a['a']}";
//$a = 123;
//$result = isset($a);
//var_dump($result);
//die();
$a = 123;
$result = empty($a);
echo 'is_empty: '. empty($a).PHP_EOL;
echo 'is_isset'. isset($a);
//var_dump($result);

define('ASD', 'что-нибудь');
const ASDD = 'asd';
echo ASDD;
echo ASD;
var_dump(PHP_EOL);