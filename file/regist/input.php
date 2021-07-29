<?php
define('CSV_PATH', 'data/users.csv');
$columns = ['name', 'email', 'password'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    initCSV($columns);
    $errors = validate($_POST);
    if (!$errors) {
        insert($_POST);
    }
}

function initCSV($data)
{
    $file = fopen(CSV_PATH, 'a+');
    flock($file, LOCK_EX);
    if (!fgets($file)) {
        fputcsv($file, $data);
    }
    flock($file, LOCK_UN);
    fclose($file);
}

function insert($data)
{
    $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
    $file = fopen(CSV_PATH, 'a');
    flock($file, LOCK_EX);
    fputcsv($file, $data);
    fclose($file);
}

function validate($data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors['name'] = '氏名を入力してください';
    }
    if (empty($data['email'])) {
        $errors['email'] = 'Emailを入力してください';
    }
    if (empty($data['password'])) {
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
        <form action="" method="post">
            <div class="mb-3">
                <label>氏名</label>
                <input type="text" class="form-control" name="name" value="">
                <p class="text-danger"><?= @$errors['name'] ?></p>
            </div>

            <div class="mb-3">
                <label>メールアドレス</label>
                <input type="text" class="form-control" name="email" value="">
                <p class="text-danger"><?= @$errors['email'] ?></p>
            </div>

            <div class="mb-3">
                <label for="">パスワード</label>
                <input type="password" class="form-control" name="password">
                <p class="text-danger"><?= @$errors['password'] ?></p>
                <small>6文字以上20文字以内の半角英数（_ @ 含む）</small>
            </div>
            <button class="btn btn-primary">登録</button>
        </form>
    </div>
</body>

</html>