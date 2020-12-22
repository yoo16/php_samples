<?php
function getFibonacci(int $i)
{
    return $i < 2 ? $i : getFibonacci($i - 1) + getFibonacci($i - 2);
}

$a = microtime(true);
echo getFibonacci(38).PHP_EOL;
$b = microtime(true);
echo $b - $a;
echo PHP_EOL;
