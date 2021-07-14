<?php
$user = [];
//POSTデータチェック
if (!empty($_POST)) {
    $user = auth($_POST['email'], $_POST['password']);
}

//ユーザがいなければログインページにリダイレクト
if (empty($user['id'])) {
    header('Location: login.php');
}

//ユーザ一覧
function fetchUsers()
{
    $users = [
        ['id' => 1, 'name' => 'user1', 'email' => 'user1@test.com', 'password' => '1111'],
        ['id' => 2, 'name' => 'user2', 'email' => 'user2@test.com', 'password' => '2222'],
        ['id' => 3, 'name' => 'user3', 'email' => 'user3@test.com', 'password' => '3333'],
    ];
    return $users;
}

//ユーザ認証
function auth($email, $password)
{
    if (!$email) return;
    if (!$password) return;
    foreach (fetchUsers() as $user) {
        if (($user['email'] == $email) && $user['password'] == $password) {
            return $user;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="h1">MyPage</h1>
        <p>ようこそ<?= $user['name'] ?>さん</p>
    </div>
</body>

</html>