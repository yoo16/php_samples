<?php
//1行のコメント
# コメント2

/*
複数行のコメント
改行もできます
*/

/**
 * 複数行のコメント
 * この方が一般的です
 */

1 + 2;

echo "コーヒー";
echo 'コーヒー';
echo '無糖' . 'コーヒー';

echo 100;
echo -10.5;

echo "ミネラルウォーター";
echo "\n";
echo 'コーラ';
echo "\n";
echo 'オレンジジュース';
echo PHP_EOL;
echo 'ほうじ茶';
echo PHP_EOL;

//HTML brタグ
echo "スライム";
echo "<br>";
echo "があらわれた";

$message;
$string;
$Message;
$MESSAGE;
$user_name;

// message;
// //数字が先頭
// $1_message;
// //変数定義で利用可能でない特殊文字
//$/message;
// $~message;

// 変数 $monster　に 文字列 "スライム" を代入
$monster = "スライム";
echo $monster;
echo PHP_EOL;

// 変数 $monster_hp に 数値 10 を代入
$monster_hp = 10;
echo $monster_hp;
echo PHP_EOL;

//print
$monster = "スライム";
print $monster;
print PHP_EOL;

$item = "コーラ";
$price = 120;
if (print $item) {
    print $price;
}
print PHP_EOL;

/**
 * データ型
 */
//文字列
$character_name = 'ヒーロー';
var_dump($character_name);

//文字列：HTMLタグ
$tag = "<br>";
echo ($tag);

//数値
$amount = 2;
$price = 1000;
$discount = -100;

$tax_rate = 0.1;
$average = 0.333;

var_dump($tax_rate);
var_dump($average);

//配列
$years = [2020, 2019, 2018, 2017];
$drinks = ['コーヒー', '紅茶', 'ほうじ茶'];

var_dump($years);
var_dump($drinks);

//連想配列
$character = [
    "name" => "ヒーロー",
    "job" => "勇者",
    "hp" => 50,
];

var_dump($character);

$character = null;
var_dump($character);

//論理型（bool）
// $is_win に true を代入
$is_win = true;
var_dump($is_win);

// 条件分岐
if ($is_win == true) {
    echo "Win";
} else {
    echo "Lose";
}
echo PHP_EOL;

//object class
$monster = new stdClass;
var_dump($monster);

//null
$character = null;
var_dump($character);

//callable
$callback = function ($a, $b) {
    return $a + $b;
};
$result = call_user_func($callback, 1, 2);
echo $result . PHP_EOL;

//定数
define('TAX_RATE', 0.1);
var_dump(TAX_RATE);

//型の自動変換
//数値計算
$price = 1000;
$tax = 0.1;
var_dump($price * $tax);
echo PHP_EOL;

//文字と数字の連結
$monster_hp = 10;
$monster_name = 'スライム';
$status = $monster_name . 'のHPは' . $monster_hp;
var_dump($status);
echo PHP_EOL;

$monster_name = "スライム";
$monster_hp = 10;
$status = "{$monster_name}のHPは{$monster_hp}";
echo $status;
echo PHP_EOL;

//シングルクオーテーション
echo '{$monster_name}のHPは{$monster_hp}';
echo '\n';
echo PHP_EOL;
