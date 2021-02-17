<?php
// $datetime = new DateTime($_GET['date']);
// $weeks = array("日", "月", "火", "水", "木", "金", "土");
// $week = (int) $datetime->format('w');
// $week_string = $weeks[$week];

$time = strtotime('02/01 TUE');
$date = date('Y-m-d', $time);
var_dump($date);

$d = new DateTime('2010-01-08');
$d->modify('first day of next month');
var_dump($d->format('Y-m-d'));
