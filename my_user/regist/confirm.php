<?php
require_once '../libs/App.php';

$posts = (!empty($_POST)) ? $_POST : [];
Session::add('posts', $posts);

$user = new User();
$user->validate($posts);
if ($user->errors) Route::redirect('/regist/');

$data = ['posts' => $posts];
View::render('regist/confirm.view.php', $data);