<?php
define('APP_NAME', 'my_form');
session_start();
const TOKEN_LENGTH = 16;

$user_name = '';

if (isset($_POST)) $_SESSION[APP_NAME]['user'] = $_POST;
if (isset($_SESSION[APP_NAME]['user'])) extract($_SESSION[APP_NAME]['user']);
if (invalidToken()) {
    echo '不正なリクエストです';
    var_dump($_POST);
    exit;
}

function invalidToken()
{
    if (!defined('APP_NAME')) exit('Not defined APP_NAME');
    if($_SERVER['REQUEST_METHOD'] != 'POST') return;
    return ($_SESSION[APP_NAME]['csrf_token'] !== $_POST['csrf_token']);
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
        <form action="" method="post">
            <p>ユーザ名</p>
            <p><?= $user_name ?></p>
            <button class="btn btn-primary">送信</button>
        </form>
    </div>
</body>

</html>