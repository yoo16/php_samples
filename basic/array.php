<?php

$monsters = ['スライム', 'キメラ', 'ノーム'];
var_dump($monsters);
echo $monsters[1];
echo PHP_EOL;

//長さ
$length = count($monsters);
echo $length;
echo PHP_EOL;


//配列の追加
$monsters[] = 'ゾンビ';
var_dump($monsters);

//最後を削除
array_pop($monsters);
var_dump($monsters);

//先頭を削除
array_shift($monsters);
var_dump($monsters);

//先頭に削除
array_unshift($monsters, 'スライム');
var_dump($monsters);

//2番目に追加
array_splice($monsters, 1, 0, "ドラゴン");
var_dump($monsters);

//2番目を削除
array_splice($monsters, 1, 1);
var_dump($monsters);

//index
$index = array_search('ノーム', $monsters);
echo $index;
echo PHP_EOL;

//update
$monsters[1] = 'ゴースト';
var_dump($monsters);

//null
$monsters[1] = null;
var_dump($monsters);

//unset
unset($monsters[1]);
var_dump($monsters);