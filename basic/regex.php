<?php
$sample = "これはテスト文章です。[url text=テストテキスト]https://hogehoge.com[/url]あ";
$sample = "これはテスト文章です。[url text=テストテキスト]https://aaa.com[/url]テスト[url text=テストテキスト]https://bbb.com[/url]aa";

$pattern = '/\[url text=(.*?)\](.*?)\[\/url\]/';
$res = "";
if (preg_match_all($pattern, $sample, $matches) !== false) {
    $res = preg_replace($pattern, '<a href="{$2}">$1</a>', $sample);
}
echo $res;
echo PHP_EOL;
