<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';

//Memberクラスの生成
$member = new Member();
$member->bind($_POST);
//$member->value = $_POST;

include 'views/regist/confirm.php';