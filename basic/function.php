<?php

$date_string = date('Y-m-d H:i:s');
echo $date_string;
$random_number = rand(1, 6);
var_dump($random_number);

//文字列の長さ
$message = "Hello";
echo strlen($message) . PHP_EOL;

$message = "こんにちは";
echo strlen($message) . PHP_EOL;
echo mb_strlen($message) . PHP_EOL;

//文字列の抜き出し（位置指定）
$message = "Hello,Tokyo";
//7文字目からすべて取得
echo substr($message, 6) . PHP_EOL;
//最初から5文字取得
echo substr($message, 0, 5) . PHP_EOL;
//後ろから5文字目からすべて取得
echo substr($message, -5) . PHP_EOL;
//後ろから6文字目から1文字取得
echo substr($message, -6, 1) . PHP_EOL;

//マルチバイト
$address = "東京都新宿区";
echo mb_substr($address, 3) . PHP_EOL;
echo mb_substr($address, 0, 3) . PHP_EOL;
echo mb_substr($address, -3) . PHP_EOL;

//文字列置換
$address = "東京都新宿区";
$address = str_replace('新宿', '渋谷', $address);
echo $address . PHP_EOL;

//is_null
$value = "";
if (is_null($value)) {
    echo "NULL です。";
} else {
    echo $value;
}
echo PHP_EOL;

//NULL
$value = null;
if (is_null($value)) {
    echo "NULL です。";
} else {
    echo $value;
}
echo PHP_EOL;

//isset
$value = "";
if (isset($value)) {
    echo "変数に値が設定されています";
} else {
    echo "エラー";
}
echo PHP_EOL;

if (isset($value2)) {
    echo "変数に値が設定されています";
} else {
    echo "エラー";
}
echo PHP_EOL;

//empty
//string
$value = "";
if (empty($value)) {
    echo "空欄です" . PHP_EOL;
}

//boolean
$value = false;
if (empty($value)) {
    echo "False です" . PHP_EOL;
}

//boolean
$value = 0;
if (empty($value)) {
    echo "0 です" . PHP_EOL;
}

//array
$value =[];
if (empty($value)) {
    echo "配列が空です" . PHP_EOL;
}

//null
$value = null;
if (empty($value)) {
    echo "NULL です" . PHP_EOL;
}
if (empty($value2)) {
    echo "NULL です" . PHP_EOL;
}

//is_numeric
$number = 10;
$string = "東京";

//is_numeric
$number = 1;
$number = 1.5;
// $number = true;
// $number = "";
// $number = "東京";
// $number = "1";
if (is_numeric($number)) {
    echo "数値です" . PHP_EOL;
}
if (is_int($number)) {
    echo "整数です" . PHP_EOL;
}
if (is_float($number)) {
    echo "少数です" . PHP_EOL;
}
if (is_string($number)) {
    echo "文字列です" . PHP_EOL;
}
if (is_bool($number)) {
    echo "論理型です" . PHP_EOL;
}