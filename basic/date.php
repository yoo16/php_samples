<?php

//date()
echo date('Y').PHP_EOL;
echo date('m').PHP_EOL;
echo date('d').PHP_EOL;
echo date('d').PHP_EOL;
echo date('H').PHP_EOL;
echo date('i').PHP_EOL;
echo date('s').PHP_EOL;
echo date('w').PHP_EOL;

//Datetime
$date = new DateTime();
echo $date->format('Y').PHP_EOL;
echo $date->format('m').PHP_EOL;
echo $date->format('d').PHP_EOL;
echo $date->format('d').PHP_EOL;
echo $date->format('H').PHP_EOL;
echo $date->format('i').PHP_EOL;
echo $date->format('s').PHP_EOL;
echo $date->format('w').PHP_EOL;

echo $date->format('Y-m-d H:i:s').PHP_EOL;


//1日前
$date = new DateTime();
echo $date->modify('-1 days')->format('Y-m-d H:i:s').PHP_EOL;

//2ヶ月後
$date = new DateTime();
echo $date->modify('+2 month')->format('Y-m-d H:i:s').PHP_EOL;

$timezone = $date->getTimezone();
echo $timezone->getName().PHP_EOL;

$format = 'Y年m月d日 H時i分s秒';
// $date = DateTime::createFromFormat($format);

$weekdays = ['日', '月', '火', '水', '木', '金', '土'];
$weekday_index = $date->format('w');
$weekday_string = $weekdays[$weekday_index];

echo $date->format('Y年m月d日 H:i:s')."({$weekday_string})".PHP_EOL;
