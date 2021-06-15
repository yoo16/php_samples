<?php
//モデルファイルの読み込み
require_once 'models/Member.php';
require_once 'helpers/Form.php';

//Memberクラスの生成
$member = new Member();

include 'views/regist/input.php';