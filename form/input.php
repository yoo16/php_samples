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
            <label>氏名</label>
            <input class="form-control" type="text" name="name">
            <label>かな</label>
            <input class="form-control" type="text" name="kana">
            <label>メールアドレス</label>
            <input class="form-control" type="email" name="mail">
            <label>パスワード</label>
            <input class="form-control" type="password" name="password">
            <label>電話番号</label>
            <input class="form-control" type="text" name="tel">
            <label>誕生日</label>
            <select name="year" class="form-control">
                <?php foreach (range(1900, date('Y')) as $year) : ?>
                    <option value="<?= $year ?>" name="year"><?= $year ?>年</option>
                <?php endforeach ?>
            </select>
            <label>性別</label>
            <div>
                <label for="male">
                    <input type="radio" name="gender" value="male">
                    男
                </label>
                <label for="female">
                    <input type="radio" name="gender" value="male">
                    女
                </label>
            </div>
            <div>
                <button class="btn btn-primary">送信</button>
            </div>
        </form>
    </div>
</body>

</html>