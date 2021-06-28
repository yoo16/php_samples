<?php
$informations = [];
$file_path = 'data/information.txt';
if (file_exists($file_path)) {
    //ファイルを開く
    $file = fopen($file_path, 'r');
    //var_dump($file);
    //1行読み込む
    $line = fgets($file, 4096);
    echo $line;
    //ファイルを閉じる
    fclose($file);
}