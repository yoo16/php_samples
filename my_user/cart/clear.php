<?php
require_once './libs/App.php';

Session::forget('cart_items');

//cart/index.php リダイレクト
Route::redirect('/cart/index.php');