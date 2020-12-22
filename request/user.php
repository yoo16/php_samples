<?php
session_start();
if (isset($_SESSION['lesson']['user'])) {
    $user = $_SESSION['lesson']['user'];
} else {
    header('Location: login.php');
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
    <div>
        <a href="logout.php">ログアウト</a>
    </div>
    <h2 class="h2">ユーザページ</h2>
    <h3 class="">メールアドレス</h3>
    <p>
       <?= $user['email'] ?>
    </p>
</body>

</html>