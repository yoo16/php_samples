<?php
$url = "http://zipcloud.ibsnet.co.jp/api/search?zipcode=1600022";
// 郵便番号検索（JSON取得）
$json = file_get_contents($url);

//文字化け防止
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN,SJIS');
$data = json_decode($json, true);

var_dump($data);
