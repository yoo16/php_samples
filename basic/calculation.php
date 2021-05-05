<?php

/**
 * 二項演算
 */
$hp = 3;
$hp = $hp + 1;
var_dump($hp);

$hp = 1;
var_dump($hp - 2);

$hp = 5;
var_dump($hp * 3);

$hp = 5;
var_dump($hp / 5);

$hp = 6;
var_dump($hp % 5);

$price = 88;
$amount = 13;
$total_price = $price * $amount; 
echo $total_price;
echo PHP_EOL;

// . 
//文字列を連結する演算子
$monster_name = "スライム";
echo $monster_name."があわられた！";
echo PHP_EOL;

//文字列リテラル
$monster_name = "スライム";
$hp = 10;
$status = "{$monster_name}のHPは{$hp}";
echo $status;
echo PHP_EOL;

//シングルクォーテーション
$monster_name = "スライム";
$hp = 10;
echo '{$monster_name}のHPは{$hp}';
echo '\n';

/**
 * 単項演算
 */
// $hp に 1 足した結果を $hp に代入
$hp = 5;
++$hp;
echo $hp;
echo PHP_EOL;
//6

// $hp から 1 引いた結果を $hp に代入
$hp = 5;
--$hp;
echo $hp;
echo PHP_EOL;
//4

/**
 * 複合演算
 */
$hp = 10;
$hp += 5;
echo $hp;
echo PHP_EOL;

$hp = 10;
$hp -= 5;
echo $hp;
echo PHP_EOL;

$hp = 10;
$hp *= 5;
echo $hp;
echo PHP_EOL;

$hp = 10;
$hp /= 5;
echo $hp;
echo PHP_EOL;

// .= 
//変数に文字列を連結
$message = 'この物語は';
$message .= 'フィクションです';
echo $message;
echo PHP_EOL;

//
$hp = 50;
$attack = 10;
$hp = $hp - $attack;
echo $hp;
echo PHP_EOL;

/**
 * 論理演算
 */
$hp = 10;
$is_equal = ($hp == 20);
var_dump($is_equal);

// < は左項が右項より小さいか
$hp = 0;
$is_under = ($hp < -10);
var_dump($is_under);

// > は左項が右項より大きいか
$hp = 0;
$is_over = ($hp > -10);
var_dump($is_over);

// > は左項が右項以上か
$hp = 10;
$is_over = ($hp >= 10);
var_dump($is_over);

// === は左項と右項が同値（型と値が同じ）か判定
$a = "20";
$b = 20;

$is_equal = ($a == $b); 
var_dump($is_equal);
//true

$is_equal = ($a === $b);
// $is_equal = $a === $b;
var_dump($is_equal);
//false

$is_not_equal = ($a !== $b);
// $is_not_equal = $a !== $b;
var_dump($is_not_equal);
//true

/**
 * 三項演算
 */
// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$hp = 10;
$result = ($hp <= 20) ? 'ピンチ！' : 'まだ平気';

echo $result;
echo PHP_EOL;


/**
 * インクリメントの検証
 */

$var1 = 10;
$var2 = $var1++;

var_dump($var2);

$var1 = 10;
$var2 = ++$var1;

var_dump($var2);


//
$hp = 5;
$hp++;
$hp-4;
$hp*4;
$hp/2;
echo $hp;
echo PHP_EOL;