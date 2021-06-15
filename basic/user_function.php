<?php

$last_name = '東京';
$first_name = '一郎';
showMessage($last_name, $first_name);
showMessage($last_name, $first_name, 'さようなら！');

function showMessage($last_name, $first_name, $message='こんにちわ！') {
	$message = "{$last_name}　{$first_name}さん、{$message}";
	echo $message, PHP_EOL;
}