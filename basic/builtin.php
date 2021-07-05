<?php
$date_string = date('Y-m-d H:i:s');
$random_number = rand(1, 6);

//文字列の長さ
$message_1 = "Hello";
$length_1 = strlen($message_1);

$message_2 = "こんにちは";
$length_2 = mb_strlen($message_2);

//substr() 文字列の抜き出し（位置指定）
$message = "Hello,Tokyo";
//mb_substr()
$address = "東京都新宿区";

$address_2 = str_replace('新宿', '渋谷', $address);

//is_null
$value = "";
if (is_null($value)) {
    $result_1 = "NULL です。";
} else {
    $result_1 = "NULL ではありません。";
}

//isset
//$value = null;
$value = "";
if (isset($value)) {
    $result_2 = '値が設定されています';
} else {
    $result_2 = '値が設定されていません';
}
//empty
//string
$value = "";
$value = false;
$value = 0;
$value = [];
$value = null;

$result_3 = '';
if (empty($value)) {
    $result_3 = "空欄です";
} else {
    $result_3 = "空欄ではありません";
}

// undefined
if (empty($price)) {
    $result_4 = "未定義です";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>日時</h2>
    <p><?= $date_string ?></p>

    <h2>サイコロ</h2>
    <p><?= $random_number ?></p>

    <h2><?= $message_1 ?>の長さ</h2>
    <p><?= $length_1 ?></p>

    <h2><?= $message_2 ?>の長さ</h2>
    <p><?= $length_2 ?></p>

    <!-- 7文字目からすべて取得 -->
    <p><?= substr($message, 6) ?></p>
    <!-- 最初から5文字取得 -->
    <p><?= substr($message, 0, 5) ?></p>
    <!-- 後ろから5文字目からすべて取得 -->
    <p><?= substr($message, -5) ?></p>
    <!-- 後ろから6文字目から1文字取得 -->
    <p><?= substr($message, -6, 1) ?></p>

    <p><?= mb_substr($address, 3) ?></p>
    <p><?= mb_substr($address, 0, 3) ?></p>
    <p><?= mb_substr($address, -3, 2) ?></p>

    <h2>「新宿」を「渋谷」に置き換え</h2>
    <p><?= $address_2 ?></p>

    <h2>is_null()</h2>
    <p><?= $result_1 ?></p>

    <h2>isset()</h2>
    <p><?= $check_isset ?></p>

    <h2>empty()</h2>
    <h3>string</h3>
    <p><?= $check_string ?></p>

    <h3>bool</h3>
    <p><?= $check_bool ?></p>

    <h2>int</h2>
    <p><?= $check_int ?></p>

    <?php

    //str_replace()
    $message = "明日は雨です";
    $message = str_replace("雨", "晴れ", $message);
    echo $message . PHP_EOL;

    //
    $user_name = "";
    if (empty($user_name)) {
        $message = "ユーザ名を入力してください";
    }
    echo $message;
    echo PHP_EOL;

    //is_numeric
    $number = 10;
    $string = "東京";

    //is_numeric
    $number = 1;
    $number = 1.5;
    // $number = true;
    // $number = "";
    // $number = "東京";
    // $number = "1";
    if (is_numeric($number)) {
        echo "数値です" . PHP_EOL;
    }
    if (is_int($number)) {
        echo "整数です" . PHP_EOL;
    }
    if (is_float($number)) {
        echo "小数です" . PHP_EOL;
    }
    if (is_string($number)) {
        echo "文字列です" . PHP_EOL;
    }
    if (is_bool($number)) {
        echo "論理型です" . PHP_EOL;
    }
    ?>
</body>

</html>