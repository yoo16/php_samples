<?php
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';

$member = new Member();
$member->bind($_POST);
$member->validate();

Session::save('member', $member);

include('views/regist/confirm.php');

// if (!empty($_POST)) {
//     $member = $_POST;
//     $member = checkSpace($_POST);
//     $_SESSION['member'] = $member;
// }

// $q1 = [
//     'internet' => 'インターネット',
//     'tv' => 'TV',
//     'mail' => 'メール',
//     'sns' => 'SNS',
//     'other' => 'その他',
// ];

// $errors = validate($member);


// function checkSpace($member)
// {
//     $member['name'] = trim($member['name']);
//     $member['email'] = trim($member['email']);

//     $member['name'] = removeZenkakuSpace($member['name']);
//     $member['kana'] = removeZenkakuSpace($member['kana']);

//     return $member;
// }

// function removeZenkakuSpace($value)
// {
//     //先頭の全角スペースを空にする
//     $value = preg_replace('/^[　]+/u', '', $value);

//     //最後の全角スペースを空にする
//     $value = preg_replace('/[　]+$/u', '', $value);

//     return $value;
// }

// function validate($member)
// {
//     $errors = [];
//     //empty
//     if (empty($member['name'])) {
//         $errors['name'] = '氏名を入力してください';
//     }
//     if (empty($member['kana'])) {
//         $errors['kana'] = 'かなを入力してください';
//     }
//     if (empty($member['email'])) {
//         $errors['email'] = 'メールアドレスを入力してください';
//     }
//     if (empty($member['password'])) {
//         $errors['password'] = 'パスワードを入力してください';
//     }
//     if (empty($member['tel'])) {
//         $errors['tel'] = '電話番号を入力してください';
//     }

//     //match
//     if (!preg_match("/^[a-z0-9_@]{6,20}$/", $member['password'])) {
//         $errors['password'] = 'パスワードは6文字以上20文字以下の半角英数で入力してください';
//     }
//     if (!preg_match("/^[0-9]{10,12}$/", $member['tel'])) {
//         $errors['tel'] = '電話番号が正しくありません';
//     }
//     return $errors;
// }

// function validateMatch($pattern, $value, $message)
// {
//     if (!preg_match($pattern, $value)) {
//         return $message;
//     }
// }

?>