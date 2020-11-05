<?php

/**
 * 二項演算
 */
$value = 3;
var_dump($value + 1);

$value = 1;
var_dump($value - 2);

$value = 5;
var_dump($value * 3);

$value = 4;
var_dump($value / 5);

$value = 6;
var_dump($value % 5);

// . 
//文字列を連結する演算子
$value = "Hello";
var_dump($value."Tokyo");

/**
 * 単項演算
 */
// $value に 1 足した結果を $value に代入
$value = 5;
++$value;
var_dump($value);
//6

// $value から 1 引いた結果を $value に代入
$value = 5;
--$value;
var_dump($value);
//4

/**
 * 複合演算
 */

// += 
// $value に 5 足した結果を $value に代入
$value = 10;
$value += 5;
var_dump($value);
//15

// -= 
// $value から 5 を引いた結果を $value に代入
$value = 10;
$value -= 5;
var_dump($value);
//5

// .= 
//変数に文字列を連結
$value = 'Hello';
$value .= ' Tokyo';
var_dump($value);
//Hello Tokyo

/**
 * 論理演算
 */
$value = 10;
$is_equal = ($value == 20);
//$is_equal = $value == 20;
var_dump($is_equal);
//false

// < は左項が右項より小さいか判定
$value = 0;
$is_under = ($value < -10);
// $is_under = $value < -10;
var_dump($is_under);
//true

// > は左項が右項より大きいか判定
$value = 0;
$result = ($value > -10);
// $result = $value > -10;
var_dump($result);
//true

// > は左項が右項以上か判定
$value = 10;
$result = ($value >= 10);
// $result = $value >= 10;
var_dump($result);
//true

// === は左項と右項が同値（型と値が同じ）か判定
$a = "20";
$b = 20;

$is_equal = ($a == $b); 
// $is_equal = $a == $b;    
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
$value = 10;
// () 内の結果が true の場合、: の左の値が代入、false の場合 : の右の値を代入
$result = ($value <= 20) ? '$value は 20 以下' : '$value は 20 より大きい';

var_dump($result);
//$value は 20 以下


/**
 * インクリメントの検証
 */

$var1 = 10;
$var2 = $var1++;

var_dump($var2);

$var1 = 10;
$var2 = ++$var1;

var_dump($var2);