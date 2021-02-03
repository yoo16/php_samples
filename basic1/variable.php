<?php
$message;
$string;
$Message;
$MESSAGE;
$user_name;

1;

// message;
// //数字が先頭
// $1_message;
// //変数定義で利用可能でない特殊文字
//$/message;
// $~message;

// 変数 $name　に 文字列 "Apple" を代入
$name = "Apple";

// 変数 $price に 数値 300 を代入
$price = 300;

echo $name;

echo $price;

/**
 * データ型
 */
//文字列
$city_name = '東京';
var_dump($city_name);

//文字列：HTMLタグ
$tag = "<br>";
echo ($tag);

//数値
$number_1 = 1;
$number_2 = 100;
$number_3 = -10;

//配列
$years = [2020, 2019, 2018, 2017];
$fruits = ['apple', 'orange', 'peach', 'banana'];

echo $years[0];

echo $fruits[3];

//連想配列
$user = [
    "name" => "A",
    "gender" => "male",
    "age" => 21,
];

echo $user["gender"];

//論理型（bool）
// $is_acive に true を代入
$is_acitve = true;

// 条件分岐
if ($is_acive == true) {
    echo "成功";
} else {
    echo "失敗";
}


//自動変換
$number_1 = 100;
$number_2 = 0.1;
var_dump($number_1*$number_2);
//float:10

$number = 100;
$string = 'Tokyo';
var_dump($string.$number);
//string:Tokyo100 

//object
$class = new stdClass;
var_dump($class);

$obj = null;
var_dump($obj);

//callable
$callback = function($a, $b) {
    return $a + $b;
};
var_dump($callback);