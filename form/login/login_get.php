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
        <form action="mypage.php" method="get">
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