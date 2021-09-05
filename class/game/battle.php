<?php
require_once 'Brave.php';
require_once 'Wizard.php';
require_once 'Monster.php';

$brave = new Brave();
$brave->name = 'ヒーロー';
$brave->hp = 30;
$brave->attack_power = 8;
$brave->defense_power = 4;

$wizard = new Wizard();
$wizard->name = 'バーバラ';
$wizard->hp = 20;
$wizard->mp = 10;
$wizard->attack_power = 3;
$wizard->defense_power = 1;

$monster = new Monster();
$monster ->name = 'ボス';
$monster->hp = 50;
$monster->attack_power = 8;
$monster->defense_power = 5;

//続きのプログラミング
//手順 1 - 4