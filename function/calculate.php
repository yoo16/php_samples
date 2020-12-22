<?php
function calculate($x) {
    $y = $x + 5;
    return $y;  //戻り値は return を利用
}
$answer = calculate(3);
echo $answer;