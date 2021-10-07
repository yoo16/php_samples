<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$posts = check($_POST);
$errors = validate($posts);
if (!empty($errors)) {
    header('Location: input.php');
    exit;
}

function check($posts)
{
    if (empty($posts)) return;
    foreach ($posts as $column => $post) {
        $posts[$column] = htmlspecialchars($post, ENT_QUOTES, 'UTF-8');
    }
    return $posts;
}

function validate($posts)
{
    $errors = [];
    if (empty($posts['email'])) {
        $errors['email'] = 'メールアドレスを入力してください';
    }
    if (empty($posts['password'])) {
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
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="h2 text-center p-3">会員登録</h2>
                <form action="result.php" method="post">
                    <label class="form-label fw-bold" for="">氏名</label>
                    <p><?= $posts['name'] ?></p>

                    <label class="form-label fw-bold" for="">メールアドレス</label>
                    <p><?= $posts['email'] ?></p>

                    <div class="text-center p-3">
                        <p>この内容で登録しますか？</p>
                        <button class="btn btn-primary">登録</button>
                        <a href="input.php" class="btn btn-outline-primary">戻る</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>