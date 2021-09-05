<?php
require_once 'Monster.php';

$monster = new Monster();
$monster ->name = 'スライム';
$monster->hp = 5;
$monster->attack_power = 2;
$monster->defense_power = 1;
$monster->damaged(2);

echo $monster->message;