<?php
require_once "models/Character.php";

$wizard = new Character();
$wizard->name = "アリス";
$wizard->job = "wizard";
$wizard->hp = 30;

echo $wizard->name;
echo PHP_EOL;
echo $wizard->job;
echo PHP_EOL;
echo $wizard->hp;
echo PHP_EOL;

$warrior = new Character();
$warrior->name = "ボブ";
$warrior->job = "warrior";
$warrior->hp = 50;

$wizard->walk("left");
$wizard->talk($warrior, "勝負しましょう！");

echo $warrior->hp;
echo PHP_EOL;

$wizard->attack($warrior);
echo $warrior->hp;
echo PHP_EOL;