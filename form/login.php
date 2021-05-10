<?php
function fetchUser($email, $password)
{
    $users = [
        ['name' => 'user1', 'email' => 'user1@test.com', 'password' => '1111'],
        ['name' => 'user2', 'email' => 'user2@test.com', 'password' => '2222'],
        ['name' => 'user3', 'email' => 'user3@test.com', 'password' => '3333'],
    ];

    if ($_POST['email'] && $_POST['password']) {
        foreach ($users as $user) {
            if (($user['email'] == $email)
                && $user['password'] == $password
            ) {
                return $user;
            }
        }
    }
}

$user = [];
if (!empty($_POST)) {
    $user = fetchUser($_POST['email'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="h2">ログイン</h2>
        <form action="login.php" method="post">
            <label for="">メールアドレス</label>
            <input class="form-control" type="email" name="email">
            <label for="">パスワード</label>
            <input class="form-control" type="password" name="password">
            <div>
                <button class="btn btn-primary">ログイン</button>
            </div>
        </form>

        <?php if (!empty($user)) : ?>
            <div class="alert alert-info">
                <?= $user['name'] ?> さんがログインしました。
            </div>
        <?php endif ?>
    </div>
</body>

</html>