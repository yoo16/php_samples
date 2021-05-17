<?php
$genders = ['male' => '男性', 'female' => '女性'];

$member = [];
if (!empty($_POST)) {
    $member = $_POST;
}
$errors = validate($member);

function validate($member)
{
    $errors = [];
    if (empty($member['name'])) {
        $errors[] = '氏名を入力してください';
    }
    if (empty($member['kana'])) {
        $errors[] = 'かなを入力してください';
    }
    if (empty($member['email'])) {
        $errors[] = 'メールアドレスを入力してください';
    }
    if (empty($member['password'])) {
        $errors[] = 'パスワードを入力してください';
    } else {
        if (!preg_match("/^[a-z0-9_@]{6,20}$/i", $member['password'])) {
            $errors[] = 'パスワードは6文字以上20文字以下の半角英数で入力してください';
        }
    }
    if (empty($member['tel'])) {
        $errors[] = '電話番号を入力してください';
    }
    if (empty($member['year'])) {
        $errors[] = '誕生日年を入力してください';
    }
    if (empty($member['gender'])) {
        $errors[] = '性別を入力してください';
    }
    return $errors;
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
        <?php if ($errors) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error_message) : ?>
                    <ul>
                        <li><?= $error_message ?></li>
                    </ul>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 col-form-label">氏名</label>
                <?= $member['name'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">かな</label>
                <?= $member['kana'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">メールアドレス</label>
                <?= $member['email'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">電話番号</label>
                <?= $member['tel'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">誕生日年</label>
                <?php if ($member['year']) : ?>
                    <?= $member['year'] ?> 年
                <?php endif ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">性別</label>
                <?php if ($member['gender']) : ?>
                    <?= $genders[$member['gender']] ?>
                <?php endif ?>
            </div>

            <div>
                <a href="input.php" class="btn btn-outline-primary">戻る</a>
                <?php if (empty($errors)) : ?>
                    <button class="btn btn-primary">登録</button>
                <?php endif ?>
            </div>
        </form>
    </div>
</body>

</html>