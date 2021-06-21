<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';
//コントローラー読み込み
require_once 'controllers/RegistController.php';

//コントローラーの実行
$controller = new RegistController();
$controller->input();

//セッションから Memberクラスの読み込み
$member = Session::load('member');
if (empty($member)) {
    //$member がなかったら新規作成
    $member = new Member();
}

include 'views/regist/input.php';