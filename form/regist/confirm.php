<?php
session_start();
session_regenerate_id(true);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}
$_SESSION['member'] = $member = $_POST;
// $member = checkSpace($member);
$errors = validate($member);
if ($errors) {
    $_SESSION['errors'] = $errors;
    header('Location: input.php');
}

$genders = ['male' => '男性', 'female' => '女性'];

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
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
        <form action="result.php" method="post">
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