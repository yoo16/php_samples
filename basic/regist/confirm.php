<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_SESSION['user'] = $_POST;
    $errors = validate($user);
    $_SESSION['errors'] = $errors;
}
if (empty($user) || isset($errors)) {
    header('Location: input.php');
}

function validate($user)
{
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>確認画面</h2>
        <p>この内容でよいですか？</p>
        <form action="result.php" method="post">
            <div>
                <label for="">Email</label>
                <p><?= $user['email'] ?></p>
            </div>
            <div>
                <a class="btn btn-outline-primary" href="input.php">戻る</a>
                <button class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</body>

</html>