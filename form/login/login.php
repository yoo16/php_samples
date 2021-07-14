
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
        <h2 class="h2">ログイン</h2>
        <form action="mypage.php" method="post">
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