<?php
require_once 'Monster.php';

$monster = new Monster();
$monster->name = 'スライム';
$monster->hp = 5;
$monster->appear();

echo $monster->message;