<?php
require_once '../libs/App.php';

$posts = Session::get('posts');
$errors = Session::get('errors');

$data = ['posts' => $posts, 'errors' => $errors];
View::render('regist/input.view.php', $data);