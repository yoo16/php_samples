<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';

//Memberクラスの生成
$member = new Member();
$member->bind($_POST);

//Memberクラスをセッションを保存
Session::save('member', $member);

include 'views/regist/confirm.php';