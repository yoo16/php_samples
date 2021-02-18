<?php
require_once '../libs/App.php';

$posts = (!empty($_POST)) ? $_POST : [];
// POST リクエストのデータをセッションに登録
Session::add('posts', $posts);

$user = new User();
// 入力チェック＆ユーザが存在するかチェック
$user->validate($posts);
if ($user->errors) Route::redirect('/regist/');

$data = ['posts' => $posts];
View::render('regist/confirm.view.php', $data);