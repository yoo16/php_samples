<?php
define('APP_NAME', 'my_form');
session_start();
const TOKEN_LENGTH = 16;

/**
 * csrf
 * 
 * CSRF トークン発行
 * 
 * @return string
 */
function csrf()
{
    if (!defined('APP_NAME')) exit('Not defined APP_NAME');
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        //ビルトイン関数 ランダムに乱数を作成
        $bytes = openssl_random_pseudo_bytes(TOKEN_LENGTH);
        //バイナリを16進数に変換
        $_SESSION[APP_NAME]['csrf_token'] = bin2hex($bytes);
    }
    return $_SESSION[APP_NAME]['csrf_token'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="confirm.php" method="post">
            <p>ユーザ名を入力してください。</p>
            <input class="form-control" type="text" name="user_name" value="<?= $user_name ?>">
            <input type="hidden" name="csrf_token" value=<?= csrf() ?>>
            <button class="btn btn-primary">送信</button>
        </form>
    </div>
</body>

</html>