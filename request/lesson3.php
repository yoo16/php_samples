<?php
session_start();
if (isset($_POST['user'])) {
    $user = $_POST['user'];
    if ($user['email'] == 'test' && $user['password'] == 'test') {
        $_SESSION['lesson']['user'] = $user;
        header('Location: user.php');
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>

<body>
    <h2 class="h2">ログイン</h2>
    <form action="lesson3.php" method="post">
        <h2>メールアドレス</h2>
        <input type="text" name="user[email]" value="">
        <h2>パスワード</h2>
        <input type="password" name="user[password]" value="">
        <p>
            <button>送信</button>
        </p>
    </form>
</body>

</html>