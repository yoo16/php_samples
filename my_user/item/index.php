<?php
require_once './libs/App.php';

$item = new Item();
$items = $item->fetchRows();

$data = ['items' => $items];
View::render('item/index.view.php', $data);