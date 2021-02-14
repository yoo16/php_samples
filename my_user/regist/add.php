<?php
require_once '../libs/App.php';

$posts = Session::get('posts');
if (!$posts) Route::redirect('input.php');

$user = new User();
$posts['password'] = password_hash($posts['password'], PASSWORD_DEFAULT);
$user->insert($posts);

Route::redirect('/regist/result.php');
