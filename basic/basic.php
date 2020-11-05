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

echo "Hello PHP 1";
echo 'Hello PHP 2';
echo ("Hello PHP 3");
var_dump('Hello PHP');

echo "Hello PHP 1";
echo "\n";
echo 'Hello PHP 2';
echo PHP_EOL;
echo ("Hello PHP 3");
echo PHP_EOL;

/**
 * 文字列の連結
 */
$string1 = "空";
$string2 = "青い";
$string3 = "{$string1}は{$string2}" . PHP_EOL;
echo $string3;
