<?php

function calculate($x)
{
    $y = $x + 5;
    return $y;
}

$answer = calculate(2);

//totalPrice()
function totalPrice($price, $amount)
{
    $tax = 1.1;
    $total_price = $price * $amount * $tax;
    return $total_price;
}

$total_price = totalPrice(200, 5);

//calcultePoint
function calculatePoint($price, $rate = 0.01)
{
    $point = $price * $rate;
    return $point;
}

$point1 = calculatePoint($total_price);
$point2 = calculatePoint($total_price, 0.05);

//buyMessage()
function buy(string $item_name, int $price, float $tax_rate = 0.1)
{
    $tax = $price * $tax_rate;
    $message = "{$item_name}の消費税は{$tax}円です。";
    return $message;
}
$message = buy('紅茶', 150);


//移動メッセージ
function move($character_name, $method)
{
    if (empty($method)) {
        return "{$character_name}は家にいます";
    } else {
        return "{$character_name}が{$method}で移動しています";
    }
}

//移動手段
function moveMethod($distance, $is_rain = false)
{
    if ($is_rain) return;
    $method = "";
    if ($distance < 1) {
        $method = '徒歩';
    } else if ($distance >= 1 && $distance < 5) {
        $method = '自転車';
    } else {
        $method = '電車';
    }
    return $method;
}


define('ADMIN_ID', 'admin');
define('ADMIN_PW', 'admin1234');

function auth($login_name, $password) {
    if (empty($login_name)) return 'ログイン名を入力してください。';
    if (empty($password)) return 'パスワードを入力してください。';
    if ($login_name == ADMIN_ID && $password == ADMIN_PW) {
        return '管理者ログイン成功！';
    } else {
        return 'ログイン名またはパスワードが間違っています。';
    }
}

$login_name = 'admin';
$password = '';
$message_1 = auth($login_name, $password);

$login_name = 'admin';
$password = '1234';
$message_2 = auth($login_name, $password);

$login_name = 'admin';
$password = 'admin1234';
$message_3 = auth($login_name, $password);
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
    <h2>答え</h2>
    <p><?= $answer ?></p>

    <h2>合計金額</h2>
    <p><?= $total_price ?>円</p>

    <h2>ポイント</h2>
    <p><?= $point1 ?>pt</p>
    <p><?= $point2 ?>pt</p>

    <h2>購入メッセージ</h2>
    <p><?= $message ?></p>

    <h2>移動</h2>
    <p><?= move("イヌ", moveMethod(0.5)) ?></p>
    <p><?= move("ネコ", moveMethod(3, true)) ?></p>
    <p><?= move("キリン", moveMethod(5, false)) ?></p>

    <h2>移動手段</h2>
    <p><?= moveMethod(0.5) ?></p>
    <p><?= moveMethod(3, true) ?></p>
    <p><?= moveMethod(5, false) ?></p>

    <div>
        <?php
        function say($message)
        {
            return $message;
        }
        $result = say("こんにちわ");

        //Pay
        function pay($type)
        {
            return "{$type}Pay";
        }

        function showMessage($last_name, $first_name, $message = 'こんにちわ！')
        {
            $message = "{$last_name}　{$first_name}さん、{$message}";
            echo $message, PHP_EOL;
        }

        $last_name = '東京';
        $first_name = '一郎';
        showMessage($last_name, $first_name);
        showMessage($last_name, $first_name, 'さようなら！');
        ?>
    </div>
        
    <h2>Pay</h2>
    <p><?= pay('LINE') ?></p>
    <p><?= pay('AU') ?></p>
    <p><?= pay('Pay') ?></p>

    <h2>認証</h2>
    <p><?= $message_1 ?></p>
    <p><?= $message_2 ?></p>
    <p><?= $message_3 ?></p>
</body>

</html>