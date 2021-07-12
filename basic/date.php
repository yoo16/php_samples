<?php

//date()
echo date('Y') . PHP_EOL;
echo date('m') . PHP_EOL;
echo date('d') . PHP_EOL;
echo date('d') . PHP_EOL;
echo date('H') . PHP_EOL;
echo date('i') . PHP_EOL;
echo date('s') . PHP_EOL;
echo date('w') . PHP_EOL;

date_default_timezone_set('Asia/Tokyo');
echo date('Y年m月d日 H:i:s') . PHP_EOL;

//time()
echo date('Y/m/d H:i:s', time());
echo PHP_EOL;

$time = strtotime('2020/01/01 08:30'); 
echo date('Y/m/d H:i:s', $time);
echo PHP_EOL;

//翌日
echo date('Y/m/d H:i:s', strtotime('+1day')) . PHP_EOL;
//3ヶ月前
echo date('Y/m/d H:i:s', strtotime('-3month')) . PHP_EOL;
//1年後
echo date('Y/m/d H:i:s', strtotime('+1year')) . PHP_EOL;
//2週間前
echo date('Y/m/d H:i:s', strtotime('-2week')) . PHP_EOL;

//2週間後の月曜日
echo date('Y/m/d H:i:s', strtotime('+2 Monday')) . PHP_EOL;
//前の月曜日
echo date('Y/m/d H:i:s', strtotime('-1 Monday')) . PHP_EOL;


//Datetime
$date = new DateTime();
echo $date->format('Y') . PHP_EOL;
echo $date->format('m') . PHP_EOL;
echo $date->format('d') . PHP_EOL;
echo $date->format('d') . PHP_EOL;
echo $date->format('H') . PHP_EOL;
echo $date->format('i') . PHP_EOL;
echo $date->format('s') . PHP_EOL;
echo $date->format('w') . PHP_EOL;

echo $date->format('Y-m-d H:i:s') . PHP_EOL;

//1日前
$date = new DateTime();
echo $date->modify('-1 days')->format('Y-m-d H:i:s') . PHP_EOL;

//2ヶ月後
$date = new DateTime();
echo $date->modify('+2 month')->format('Y-m-d H:i:s') . PHP_EOL;

$timezone = $date->getTimezone();
echo $timezone->getName() . PHP_EOL;

$format = 'Y年m月d日 H時i分s秒';
// $date = DateTime::createFromFormat($format);

$weekdays = ['日', '月', '火', '水', '木', '金', '土'];
$weekday_index = $date->format('w');
$weekday_string = $weekdays[$weekday_index];

echo $date->format('Y年m月d日 H:i:s') . "({$weekday_string})" . PHP_EOL;
