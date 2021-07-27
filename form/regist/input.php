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
];
//セッション取得
if (isset($_SESSION['member'])) {
    $member = $_SESSION['member'];
}

function checked($value, $target)
{
    if (is_array($value)) {
        return (in_array($target, $value)) ? 'checked' : '';
    } else {
        return ($value == $target) ? 'checked' : '';
    }
}

function selected($value, $target)
{
    return ($value == $target) ? 'selected' : '';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
        <form action="confirm.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>氏名<label class="text-danger">*</label></label>
                <input class="form-control" type="text" name="name" value="<?= $member['name'] ?>">
            </div>

            <div class="form-group">
                <label>かな<label class="text-danger">*</label></label>
                <input class="form-control" type="text" name="kana" value="<?= $member['kana'] ?>">
            </div>

            <div class="form-group">
                <label>メールアドレス<label class="text-danger">*</label></label>
                <input class="form-control" type="email" name="email" value="<?= $member['email'] ?>">
            </div>

            <div class="form-group">
                <label>パスワード<label class="text-danger">*</label></label>
                <input class="form-control" type="password" name="password">
            </div>

            <div class="form-group">
                <label>電話番号（ハイフンなし）<label class="text-danger">*</label></label>
                <input class="form-control" type="text" name="tel" value="<?= $member['tel'] ?>">
            </div>

            <div class="form-group">
                <label>誕生日年</label>
                <div class="form-inline">
                    <select name="year" class="form-control col-2">
                        <option value="" name="year">--年--</option>
                        <?php foreach (range(date('Y'), 1900) as $year) : ?>
                            <option value="<?= $year ?>" name="year" <?= selected($member['year'], $year) ?>><?= $year ?></option>
                        <?php endforeach ?>
                    </select>
                    /
                    <select name="month" class="form-control col-2">
                        <option value="" name="month">--月--</option>
                        <?php foreach (range(1, 12) as $month) : ?>
                            <option value="<?= $month ?>" name="month" <?= selected($member['month'], $month) ?>><?= $month ?></option>
                        <?php endforeach ?>
                    </select>
                    /
                    <select name="day" class="form-control col-2">
                        <option value="" name="day">--日--</option>
                        <?php foreach (range(1, 31) as $day) : ?>
                            <option value="<?= $day ?>" name="day" <?= selected($member['day'], $day) ?>><?= $day ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>性別</label>
                <div>
                    <input id="gender_male" type="radio" name="gender" value="male" <?= checked($member['gender'], 'male') ?>>
                    <label for="gender_male">男性</label>
                    <input id="gender_female" type="radio" name="gender" value="female" <?= checked($member['gender'], 'female') ?>>
                    <label for="gender_female">女性</label>
                </div>
            </div>

            <div class="form-group">
                <label for="">Q1. このサイトを何で知りましたか？</label>
                <div>
                    <label for="q1_internet">
                        <input id="q1_internet" type="checkbox" name="q1[]" value="internet" <?= checked($member['q1'], 'internet') ?>>インターネット
                    </label>
                    <label for="q1_tv">
                        <input id="q1_tv" type="checkbox" name="q1[]" value="tv" <?= checked($member['q1'], 'tv') ?>>テレビ
                    </label>
                    <label for="q1_mail">
                        <input id="q1_mail" type="checkbox" name="q1[]" value="mail" <?= checked($member['q1'], 'mail') ?>>メール
                    </label>
                    <label for="q1_sns">
                        <input id="q1_sns" type="checkbox" name="q1[]" value="sns" <?= checked($member['q1'], 'sns') ?>>SNS
                    </label>
                    <label for="q1_other">
                        <input id="q1_other" type="checkbox" name="q1[]" value="other" <?= checked($member['q1'], 'other') ?>>その他
                    </label>
                </div>
            </div>
            <div>
                <button class="btn btn-primary">確認</button>
            </div>
        </form>
    </div>
</body>

</html>