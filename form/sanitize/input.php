<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
        <form action="confirm.php" method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">氏名</label>
                <input type="text" name="name" value="<?= @$user['name'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">メールアドレス</label>
                <input type="text" name="email" value="<?= @$user['email'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">パスワード</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-primary">確認</button>
        </form>
    </div>
</body>

</html>