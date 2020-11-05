<?php
require_once 'User.php';

$user = new User();
$user->speak('こんにちわ');

$user->last_name = 'Tokyo';
$user->first_name = 'Taro';
$full_name = $user->fullName();

$user->speak($full_name);
$user->speak('です');