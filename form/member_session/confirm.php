<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST;
    $errors = validate($user);

    $_SESSION['user'] = $user;
    $_SESSION['errors'] = $errors;
}
if (empty($user) || !empty($errors)) {
    header('Location: input.php');
    exit;
}

function validate($user)
{
    $errors = [];
    if (empty($user['email'])) {
        $errors['email'] = 'メールアドレスを入力してください';
    }
    if (empty($user['password'])) {
        $errors['password'] = 'パスワードを入力してください';
    }
    return $errors;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="result.php" method="post">
            <h2 class="h2">会員登録</h2>
            <p>この内容でよろしいですか？</p>
            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <p><?= $user['email'] ?></p>
            </div>
            <a class="btn btn-outline-primary" href="input.php">戻る</a>
            <button class="btn btn-primary">登録</button>
        </form>
    </div>
</body>

</html>