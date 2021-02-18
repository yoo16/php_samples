<?php
require_once '../libs/App.php';

//セッションから入力データを取得
$posts = Session::get('posts');

//もしなければ、入力画面にリダイレクト
if (!$posts) Route::redirect('input.php');

$user = new User();

//パスワードをハッシュ化する
$posts['password'] = password_hash($posts['password'], PASSWORD_DEFAULT);

//INSERT INTO users (xxxx, xxxx) VALUES(xxxx, xxxx);
$user->insert($posts);

//完了ページにリダイレクト
Route::redirect('/regist/result.php');
