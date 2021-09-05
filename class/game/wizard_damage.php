<?php
require_once 'Wizard.php';
require_once 'Monster.php';

$wizard = new Wizard();
$wizard->name = 'バーバラ';
$wizard->hp = 20;
$wizard->mp = 10;
$wizard->attack_power = 3;
$wizard->defense_power = 1;

$monster = new Monster();
$monster ->name = 'スライム';
$monster->hp = 5;
$monster->attack_power = 2;
$monster->defense_power = 1;

$wizard->damaged($monster->attack());
echo $wizard->hp;