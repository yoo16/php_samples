<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </div>
</body>

</html>