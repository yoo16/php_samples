<?php
session_start();
session_regenerate_id(true);

//会員情報初期化
$member = [
    'name' => '',
    'kana' => '',
    'email' => '',
    'password' => '',
    'tel' => '',
    'year' => 1980,
    'gender' => 'male',
    'q1' => '',
];
//セッション取得
if (isset($_SESSION['member'])) {
    $member = $_SESSION['member'];
}
// var_dump($member);

function checked($value, $target)
{
    return ($value == $target) ? 'checked' : '';
}

function selected($value, $target)
{
    return ($value == $target) ? 'selected' : '';
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
        <form action="confirm.php" method="post" enctype="multipart/form-data">
            <label>氏名<label class="text-danger">*</label></label>
            <input class="form-control" type="text" name="name" value="<?= $member['name'] ?>">
            <label>かな<label class="text-danger">*</label></label>
            <input class="form-control" type="text" name="kana" value="<?= $member['kana'] ?>">
            <label>メールアドレス<label class="text-danger">*</label></label>
            <input class="form-control" type="email" name="email" value="<?= $member['email'] ?>">
            <label>パスワード<label class="text-danger">*</label></label>
            <input class="form-control" type="password" name="password">
            <label>電話番号（ハイフンなし）<label class="text-danger">*</label></label>
            <input class="form-control" type="text" name="tel" value="<?= $member['tel'] ?>">
            <label>誕生日年</label>
            <select name="year" class="form-control">
                <option value="" name="year">--年--</option>
                <?php foreach (range(date('Y'), 1900) as $year) : ?>
                    <option value="<?= $year ?>" name="year" <?= selected($member['year'], $year) ?>><?= $year ?>年</option>
                <?php endforeach ?>
            </select>
            <label>性別</label>
            <div>
                <label for="male">
                    <input id="male" type="radio" name="gender" value="male" <?= checked($member['gender'], 'male') ?>>
                    男性
                </label>
                <label for="female">
                    <input id="female" type="radio" name="gender" value="female" <?= checked($member['gender'], 'female') ?>>
                    女性
                </label>
            </div>
            <label for="">このサイトを何で知りましたか？</label>
            <div>
                <label for="q1_internet">
                    <input id="q1_internet" type="checkbox" name="q1[]" value="internet">インターネット
                </label>
                <label for="q1_tv">
                    <input id="q1_tv" type="checkbox" name="q1[]" value="tv">テレビ
                </label>
                <label for="q1_mail">
                    <input id="q1_mail" type="checkbox" name="q1[]" value="mail">メール
                </label>
                <label for="q1_sns">
                    <input id="q1_sns" type="checkbox" name="q1[]" value="sns">SNS
                </label>
                <label for="q1_other">
                    <input id="q1_other" type="checkbox" name="q1[]" value="other">その他
                </label>
            </div>
            <div>
                <button class="btn btn-primary">確認</button>
            </div>
        </form>
    </div>
</body>

</html>