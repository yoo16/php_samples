<?php
$zip_code = $_GET['zip_code'];
$base_url = 'http://zipcloud.ibsnet.co.jp/api/search';
$url = "{$base_url}?zipcode={$zip_code}";

$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN,SJIS');
$data = json_decode($json, true);

var_dump($data);