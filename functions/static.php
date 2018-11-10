<?php

function nonStatic()
{
    static $counter = 0;
//    $counter = 0;
    echo ++$counter;
}

//echo $counter;
nonStatic();
nonStatic();
nonStatic();
nonStatic();
nonStatic();
