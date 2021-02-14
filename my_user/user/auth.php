<?php
require_once '../libs/App.php';

$user = new User();
$user = $user->auth($_POST);

if ($user['id']) {
    Route::redirect('/user/index.php');
} else {
    Route::redirect('/user/login.php');
}