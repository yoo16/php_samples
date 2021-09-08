<?php
require_once 'models/Brave.php';
require_once 'models/Wizard.php';

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

$characters = [$brave, $wizard];