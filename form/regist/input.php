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
    'birthday_at' => '1980-01-01',
    'gender' => 'male',
];
//セッション取得
if (isset($_SESSION['member'])) {
    $member = $_SESSION['member'];
}
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
        <form action="confirm.php" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="name" value="<?= $member['name'] ?>">
                <label>氏名<label class="text-danger">*</label></label>
                <p class="text-danger"><?= @$errors['name'] ?></p>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="kana" value="<?= $member['kana'] ?>">
                <label>かな<label class="text-danger">*</label></label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="email" name="email" value="<?= $member['email'] ?>">
                <label>メールアドレス<label class="text-danger">*</label></label>
                <p class="text-danger"><?= @$errors['email'] ?></p>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="password" name="password">
                <label>パスワード<label class="text-danger">*</label></label>
                <p class="text-danger"><?= @$errors['password'] ?></p>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="tel" value="<?= $member['tel'] ?>">
                <label>電話番号（ハイフンなし）<label class="text-danger">*</label></label>
                <p class="text-danger"><?= @$errors['tel'] ?></p>
            </div>

            <div class="form-group mb-3">
                <label>誕生日</label>
                <div class="row">
                    <div class="form-floating col-2">
                        <select name="year" class="form-control col-2">
                            <option value="" name="year">--年--</option>
                            <?php foreach (range(date('Y'), 1900) as $year) : ?>
                                <option value="<?= $year ?>" name="year" <?= selected($member['year'], $year) ?>><?= $year ?></option>
                            <?php endforeach ?>
                        </select>
                        <label for="">年</label>
                    </div>
                    <div class="form-floating col-2">
                        <select name="month" class="form-control col-2">
                            <option value="" name="month">--月--</option>
                            <?php foreach (range(1, 12) as $month) : ?>
                                <option value="<?= $month ?>" name="month" <?= selected($member['month'], $month) ?>><?= $month ?></option>
                            <?php endforeach ?>
                        </select>
                        <label for="">月</label>
                    </div>
                    <div class="form-floating col-2">
                        <select name="day" class="form-control col-2">
                            <option value="" name="day">--日--</option>
                            <?php foreach (range(1, 31) as $day) : ?>
                                <option value="<?= $day ?>" name="day" <?= selected($member['day'], $day) ?>><?= $day ?></option>
                            <?php endforeach ?>
                        </select>
                        <label for="">日</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label>性別</label>
                <div class="form-group">
                    <input id="gender_male" type="radio" name="gender" value="male" class="form-check-input" <?= checked($member['gender'], 'male') ?>>
                    <label for="gender_male">男性</label>
                    <input id="gender_female" type="radio" name="gender" value="female" class="form-check-input" <?= checked($member['gender'], 'female') ?>>
                    <label for="gender_female">女性</label>
                </div>
            </div>

            <div>
                <button class="btn btn-primary">確認</button>
            </div>
        </form>
    </div>
</body>

</html>