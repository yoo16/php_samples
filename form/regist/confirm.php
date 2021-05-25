<?php
session_start();
session_regenerate_id(true);

$member = [];
if (!empty($_POST)) {
    $member = $_POST;
    $member = checkSpace($_POST);
    $_SESSION['member'] = $member;
}

$genders = ['male' => '男性', 'female' => '女性'];

$errors = validate($member);

function checkSpace($member)
{
    $member['name'] = trim($member['name']);
    $member['email'] = trim($member['email']);

    $member['name'] = removeZenkakuSpace($member['name']);
    $member['kana'] = removeZenkakuSpace($member['kana']);

    return $member;
}

function removeZenkakuSpace($value)
{
    //先頭の全角スペースを空にする
    $value = preg_replace('/^[　]+/u', '', $value);

    //最後の全角スペースを空にする
    $value = preg_replace('/[　]+$/u', '', $value);

    return $value;
}

function validate($member)
{
    $errors = [];
    //empty
    if (empty($member['name'])) {
        $errors['name'] = '氏名を入力してください';
    }
    if (empty($member['kana'])) {
        $errors['kana'] = 'かなを入力してください';
    }
    if (empty($member['email'])) {
        $errors['email'] = 'メールアドレスを入力してください';
    }
    if (empty($member['password'])) {
        $errors['password'] = 'パスワードを入力してください';
    }
    if (empty($member['tel'])) {
        $errors['tel'] = '電話番号を入力してください';
    }

    //match
    if (!preg_match("/^[a-z0-9_@]{6,20}$/", $member['password'])) {
        $errors['password'] = 'パスワードは6文字以上20文字以下の半角英数で入力してください';
    }
    if (!preg_match("/^[0-9]{10,12}$/", $member['tel'])) {
        $errors['tel'] = '電話番号が正しくありません';
    }
    return $errors;
}

function validateMatch($pattern, $value, $message)
{
    if (!preg_match($pattern, $value)) {
        return $message;
    }
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
                <?php foreach ($errors as $error) : ?>
                    <ul>
                        <li><?= $error ?></li>
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