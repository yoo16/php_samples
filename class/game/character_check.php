<?php
require_once 'Brave.php';

$brave = new Brave();
$brave->name = 'ヒーロー';
$brave->hp = 30;
echo $brave->job;