<?php
require_once '../libs/App.php';

if ($posts = Session::get('posts')) {
    Session::forget('posts');
    Session::forget('errors');
    View::render('regist/result.view.php');
} else {
    Route::redirect('');
}