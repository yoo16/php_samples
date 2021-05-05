<?php

/**
 * 1 から 100 までの数字を順に表示
 */
for ($i = 0; $i <= 100; $i++) {
    echo $i;
    //01234....
}
echo PHP_EOL;

/** 
 * count() を利用する
 */
$years = [2020, 2019, 2018, 2017];
for ($i = 0; $i < count($years); $i++) {
    echo $years[$i];
    echo PHP_EOL;
}

$years = range(2020, 2017);
for ($i = 0; $i < count($years); $i++) {
    echo $years[$i];
    echo PHP_EOL;
}

/** 
 * 配列データの中身を表示する
 */
$drinks = ['ミネラルウォーター', 'お茶', '紅茶', 'コーラ', '炭酸水'];
foreach ($drinks as $drink) {
    echo $drink;
    echo PHP_EOL;
}

/** 
 * 1900年から今年までのループ
 */
foreach (range(1900, date('Y')) as $year) {
    echo $year;
    echo PHP_EOL;
}
echo PHP_EOL;

/**
 * 連想配列のループ
 */
$user = [
    "name" => "A",
    "gender" => "male",
    "age" => 21,
];

foreach ($user as $key => $value) {
    echo "{$key}:{$value}";
    echo PHP_EOL;
}


/**
 * while
 */
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}


foreach(glob("./*") as $file) {
    var_dump($file);
    $files[] = $file;
}
var_dump($files);

