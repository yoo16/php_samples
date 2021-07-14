<?php
// var_dump($_GET);
// var_dump($_POST);
$user = $_POST;
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
        <p>この内容でよろしいですか？</p>
        <div class="mb-3">
            <label for="input_email" class="form-label">Email</label>
            <p><?= $user['email'] ?></p>
        </div>
        <a class="btn btn-outline-primary" href="input.php">戻る</a>
        <button class="btn btn-primary">登録</button>
    </div>
</body>

</html>