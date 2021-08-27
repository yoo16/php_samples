<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="h2">ログイン</h2>
        <form action="mypage.php" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" type="email" name="email">
                <label for="">メールアドレス</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="password" name="password">
                <label for="">パスワード</label>
            </div>
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