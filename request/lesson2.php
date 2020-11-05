<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>

<body>
    <h2>ログイン</h2>
    <form action="lesson2.php" method="post">
        <h2>メールアドレス</h2>
        <input type="text" name="email" value="">
        <h2>パスワード</h2>
        <input type="password" name="password" value="">
        <p>
            <button>送信</button>
        </p>
    </form>
    <?php if ($_POST) : ?>
        <h2 class="h2">Result</h2>
        <h3>メールアドレス</h3>
        <?= $_POST['email'] ?>
        <h3>パスワード</h3>
        <?= $_POST['password'] ?>
    <?php endif ?>
</body>

</html>