<?php
require_once '../libs/App.php';

$user = new User();
$user = $user->checkAuth();

$data = ['user' => $user];
View::render('user/index.view.php', $data);