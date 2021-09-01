<?php
session_start();
session_regenerate_id(true);

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="h2 text-center p-3">会員登録</h2>
                <form action="confirm.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" value="<?= @$user['name'] ?>">
                        <label for="">氏名</label>
                        <p class="text-danger"><?= @$errors['name'] ?></p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="<?= @$user['email'] ?>">
                        <label for="">メールアドレス</label>
                        <p class="text-danger"><?= @$errors['email'] ?></p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password">
                        <label for="">パスワード</label>
                        <p class="text-danger"><?= @$errors['password'] ?></p>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary">確認</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>