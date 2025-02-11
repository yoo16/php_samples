<?php
$array = [50, 30, 15, 25];
$max = max($array);
$r = 5;

array_map(function ($number) use ($max, $r) { 
    $data_count = $number / $r;
    $blank_count = ($max / $r) - $data_count;
    $str = str_repeat('*', $data_count);
    $str .= str_repeat('-', $blank_count);
    echo $str.PHP_EOL;
    return $str;
}, $array);