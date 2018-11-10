<?php
function perem()
{
    $data = func_get_args();
    echo $data[0];
    unset($data[0]);
    print_r($data);
}

perem('-', 213123, 123123,3,4);
