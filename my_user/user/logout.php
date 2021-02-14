<?php
require_once '../libs/App.php';

Session::forget('user');
Route::redirect('/user/login.php');