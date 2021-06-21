<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';
require_once 'controllers/RegistController.php';

//コントローラーの実行
$controller = new RegistController();
$controller->confirm();

//Memberクラスの生成
$member = new Member();
$member->bind($_POST);
//バリデート
$member->validate();

//Memberクラスをセッションを保存
Session::save('member', $member);

include 'views/regist/confirm.php';