<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <!-- Bootstrap のインストール（CDN） -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="h2">会員登録</h2>
        <form action="confirm.php" method="post">
            <!-- snippet: input.form-control -->
            <label for="">氏名</label>
            <input type="text" class="form-control" name="name" value="<?= $member->value['name'] ?>">

            <label for="">ふりがな</label>
            <input type="text" class="form-control" name="kana" value="<?= $member->value['kana'] ?>">

            <label for="">メールアドレス</label>
            <input type="email" class="form-control" name="email" value="<?= $member->value['email'] ?>">

            <label for="">パスワード</label>
            <input type="password" class="form-control" name="password">

            <label for="">電話番号（ハイフンなし）</label>
            <input type="text" class="form-control" name="tel" value="<?= $member->value['tel'] ?>">

            <label for="">誕生日年</label>
            <div>
                <select name="year" class="form-control">
                    <option value="">-- 選択してください --</option>
                    <?php foreach (range(date('Y'), 1900) as $year) : ?>
                        <option value="<?= $year ?>"><?= $year ?>年</option>
                    <?php endforeach ?>
                </select>
            </div>

            <label for="">性別</label>
            <div>
                <input id="gender_male" type="radio" name="gender" value="male">
                <label for="gender_male">男性</label>

                <input id="gender_female" type="radio" name="gender" value="female">
                <label for="gender_female">女性</label>
            </div>

            <!-- snippet: button.btn.btn-primary -->
            <button class="btn btn-primary">確認</button>
        </form>
    </div>
</body>

</html>