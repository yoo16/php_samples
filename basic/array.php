<?php

//配列の定義と確認
$drinks = ['コーヒー', '紅茶', 'ほうじ茶'];
var_dump($drinks);
echo $drinks[1];
echo PHP_EOL;

//長さ
$length = count($drinks);
echo $length;
echo PHP_EOL;

//配列の追加
$drinks[] = '炭酸水';
var_dump($drinks);

//最後を削除
array_pop($drinks);
var_dump($drinks);

//先頭を削除
array_shift($drinks);
var_dump($drinks);

//先頭に削除
array_unshift($drinks, 'コーヒー');
var_dump($drinks);

//2番目に追加
array_splice($drinks, 1, 0, "オレンジジュース");
var_dump($drinks);

//2番目を削除
array_splice($drinks, 1, 1);
var_dump($drinks);

//index
$index = array_search('ほうじ茶', $drinks);
echo $index;
echo PHP_EOL;

//update
$drinks[1] = 'ウーロン茶';
var_dump($drinks);

//null
$drinks[1] = null;
var_dump($drinks);

//unset
unset($drinks[1]);
var_dump($drinks);