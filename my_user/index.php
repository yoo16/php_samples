<?php
require_once './libs/App.php';

$item = new Item();
$items = $item->fetchRows();
$data = ['items' => $items, 'errors' => $errors];
View::render('root/index.view.php', $data);