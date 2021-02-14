<?php
require_once '../libs/App.php';

$posts = Session::get('posts');
//TODO flush
$errors = Session::get('errors');
Session::forget('errors');

$data = ['posts' => $posts, 'errors' => $errors];
View::render('user/login.view.php', $data);