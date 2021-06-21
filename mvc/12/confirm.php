<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';
//コントローラー読み込み
require_once 'controllers/RegistController.php';

//コントローラーの実行
$controller = new RegistController();
$controller->confirm();