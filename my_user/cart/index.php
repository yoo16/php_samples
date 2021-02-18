<?php
require_once './libs/App.php';

$cart_items = Session::get('cart_items');

$data = ['cart_items' => $cart_items];
View::render('cart/index.view.php', $data);