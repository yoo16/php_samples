<?php

//モデルファイルの読み込み
require_once 'models/Member.php';

//Memberクラスの生成
$member = new Member();

//データを一時確認
//var_dump($member->value);

include 'views/regist/input.php';