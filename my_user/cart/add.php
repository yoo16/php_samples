<?php
require_once './libs/App.php';

$user = new User();
$user = $user->checkAuth();

//カートに商品を追加
if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $item = new Item();
    $item->value = $item->find($item_id);

    if ($item->value) {
        //Session::forget('cart_items');
        $cart_items = Session::get('cart_items');

        $cart_item = new CartItem();
        if (isset($cart_items[$item_id])) {
            $cart_item->value = $cart_items[$item_id];
        }
        $cart_item->value['item'] = $item->value;
        $cart_item->value['item_id'] = $item->value['id'];
        $cart_item->value['user_id'] = $user['id'];
        $cart_item->value['amount'] = ($cart_item->value['amount'] > 0) ? $cart_item->value['amount'] + 1 : 1;
        $cart_item->value['total_price'] = $item->value['price'] * $cart_item->value['amount'];

        $cart_items[$item_id] = $cart_item->value;
        Session::add('cart_items', $cart_items);
    }
}

//cart/index.php リダイレクト
Route::redirect('/cart/index.php');
