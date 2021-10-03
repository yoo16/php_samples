<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

//サニタイズ
$posts = check($_POST);
//バリデーション
$errors = validate($posts);
//セッション保存
$_SESSION['user'] = $user;
$_SESSION['errors'] = $errors;

if ($errors) {
    header('Location: input.php');
    exit;
}

function check($data)
{
    $columns = ['name', 'email', 'password'];
    foreach ($columns as $column) {
        if (isset($data[$column])) {
            $data[$column] = htmlspecialchars($data[$column]);
        }
    }
}

function validate($user)
{
    $errors = [];
    if (empty($user['name'])) {
        $errors['name'] = '氏名を入力してください';
    }
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
        <form action="add.php" method="post">
            <h2 class="h2">会員登録</h2>
            <div class="mb-3">
                <label class="fw-bold">氏名</label>
                <p class="mt-2"><?= $user['name'] ?></p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">メールアドレス</label>
                <p class="mt-2"><?= $user['email'] ?></p>
            </div>
            <div>
                <p>この内容でよろしいですか？</p>
                <a class="btn btn-outline-primary" href="input.php">戻る</a>
                <button class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</body>

</html>