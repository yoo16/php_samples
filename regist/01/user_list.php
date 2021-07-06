<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';
//コントローラー読み込み
require_once 'controllers/AdminController.php';

//コントローラーの実行
$controller = new AdminController();
$controller->user_list();