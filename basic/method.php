<?php

/**
 * 関数定義と実行
 */
function calculate1($x)
{
    $y = $x + 5;
    return $y;
}

// $x, $y は関数の外から参照できない
echo $x;  //null
echo $y;  //null

$answer = calculate1(2);
var_dump($answer);


function showMessage(string $title, string $city)
{
    $result = "{$title} {$city}";
    echo $result . PHP_EOL;
    return;
}
$result = showMessage('Hello', 'Tokyo');
var_dump($result);

/**
 * strlen()
 */
$message = "Hello";
echo strlen($message) . PHP_EOL;
$message = "ようこそ";
echo strlen($message) . PHP_EOL;
echo mb_strlen($message) . PHP_EOL;
// echo mb_strlen($message, 'UTF-8).PHP_EOL;

/**
 * substr()
 */
$rest = substr("abcdef", 2);
var_dump($rest);    //cdef
$rest = substr("abcdef", 2, 2);
var_dump($rest);    //cd
$rest = substr("abcdef", -2);
var_dump($rest);    //ef
$rest = substr("abcdef", -3, 1);
var_dump($rest);    //d

/**
 * mb_substr()
 */
$rest = mb_substr("東京", 1);
var_dump($rest);
$rest = mb_substr("神奈川", 2, 1);
var_dump($rest);

/**
 * default value
 */
function calculateTotalPrice($price, $amount, $rate = 0.1)
{
    return $price * $amount * $rate;
}
$total_price = calculateTotalPrice(200, 4);
echo '200 x 4 の 1割は ' . $total_price . ' です' . PHP_EOL;

$total_price = calculateTotalPrice(200, 4, 0.3);
echo '200 x 4 の 3割は ' . $total_price . ' です' . PHP_EOL;


//変数の用意
$values = ["", null, 0, 1, true, false, "a", []];

/**
 * is_null()
 */
echo "--- is_null() ---" . PHP_EOL;
foreach ($values as $index => $value) {
    if (is_null($value)) {
        echo $index . PHP_EOL;
        var_dump($value);
    }
}

/**
 * isset()
 */
echo "--- isset() ---" . PHP_EOL;
foreach ($values as $index => $value) {
    if (isset($value)) {
        echo $index . PHP_EOL;
        var_dump($value);
    }
};

/**
 * isset()
 */
echo "--- empty() ---" . PHP_EOL;
foreach ($values as $index => $value) {
    if (empty($value)) {
        echo $index . PHP_EOL;
        var_dump($value);
    }
};

// string(0) ""
// NULL
// int(0)
// bool(false)
// array(0) {
// }
