<?php

/*
 * 用 microtime() 对脚本的运行计时
 *
 * */

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}



$a = true;
$b = true;
$i =0;

$time_start = microtime_float();

for ($i = 0; $i < 1000000; $i++) {
    // code...
    if($a & $b){
        $i++;
    }
}
$time_end = microtime_float();
$time = $time_end - $time_start;

echo "Did nothing in $time seconds\n";
die;



