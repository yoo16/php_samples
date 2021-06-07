<?php
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';

$member = Session::load('member');
if (!$member) {
    $member = new Member();
}
// var_dump($member->value);
include('views/regist/input.php');

// session_start();
// session_regenerate_id(true);
//
//会員情報初期化
// $member = [
//     'name' => '',
//     'kana' => '',
//     'email' => '',
//     'password' => '',
//     'tel' => '',
//     'year' => 1980,
//     'gender' => 'male',
//     'q1' => '',
// ];
//
//セッション取得
// if (isset($_SESSION['member'])) {
//     $member = $_SESSION['member'];
// }
// 
// function checked($value, $target)
// {
//     if (is_array($value)) {
//         return (in_array($target, $value)) ? 'checked' : '';
//     } else {
//         return ($value == $target) ? 'checked' : '';
//     }
// }

// function selected($value, $target)
// {
//     return ($value == $target) ? 'selected' : '';
// }
