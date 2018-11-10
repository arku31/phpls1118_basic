<pre>
<?php
$arr = [1, 2, 3, 34, 5645, 56, 456, 546, 567, 234, 5, 345, 34534, 5234];
$asd['arr']['asd']['sdfsdf'] = $arr;

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . PHP_EOL;
}

foreach ($arr as $key => $item) {
    if ($item == 567) {
        echo "Нашел №567!";
        continue;
    }
    echo 'key: ' . $key . ' ' . $item . PHP_EOL;
}
$i = 10;
do {
    //log_smth($i);
    echo $i--;
} while ($i > 0);
