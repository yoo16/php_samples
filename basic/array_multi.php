<?php

$character = [
    'id' => 1,
    'name' => 'ヒーロー',
    'job' => 'brave',
    'level' => 1,
    'job' => '勇者',
    'hp' => 15,
    'hp' => 0,
    'exp' => 0,
];
var_dump($character);


echo $character['id'];
echo PHP_EOL;

echo $character['name'];
echo PHP_EOL;

echo $character['level'];
echo PHP_EOL;

echo $character['exp'];
echo PHP_EOL;

//exp 更新
$character['exp'] = 5;
echo $character['exp'];
echo PHP_EOL;


//key-value　追加
$character['job'] = 'brave';
echo $character['job'];
echo PHP_EOL;

//key-value　追加
$character['weapon'] = '銅のつるぎ';
echo $character['weapon'];
echo PHP_EOL;


$character['armor'] = '皮のよろい';
$character['items'] = ['やくそう', 'どくけしそう', '銅のかぎ'];

var_dump($character);


$rows = [
    [90, 78, 82,],
    [62, 70, 68,],
    [68, 88, 72,],
];
var_dump($rows);
