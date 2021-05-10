<?php
if (!empty($_POST)) {
    $posts = $_POST;
}
?>
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
        <h1 class="h1">会員登録フォーム</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 col-form-label">氏名</label>
                <?= $posts['name'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">かな</label>
                <?= $posts['kana'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">メールアドレス</label>
                <?= $posts['email'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">電話番号</label>
                <?= $posts['tel'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">誕生日</label>
                <?= $posts['birthday'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">性別</label>
                <?= $posts['gender'] ?>
            </div>

            <div>
                <a href="input.php" class="btn btn-outline-primary">戻る</a>
                <button class="btn btn-primary">送信</button>
            </div>
        </form>
    </div>
</body>

</html>