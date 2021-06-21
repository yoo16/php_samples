<!DOCTYPE html>
<html lang="ja">

<?php include('views/components/header.php') ?>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
        <form action="confirm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>氏名<label class="text-danger">*</label></label>
                <input class="form-control" type="text" name="name" value="<?= $member->value['name'] ?>">
            </div>

            <div class="form-group">
                <label>かな<label class="text-danger">*</label></label>
                <input class="form-control" type="text" name="kana" value="<?= $member->value['kana'] ?>">
            </div>

            <div class="form-group">
                <label>メールアドレス<label class="text-danger">*</label></label>
                <input class="form-control" type="email" name="email" value="<?= $member->value['email'] ?>">
            </div>

            <div class="form-group">
                <label>パスワード<label class="text-danger">*</label></label>
                <input class="form-control" type="password" name="password">
            </div>

            <div class="form-group">
                <label>電話番号（ハイフンなし）<label class="text-danger">*</label></label>
                <input class="form-control" type="text" name="tel" value="<?= $member->value['tel'] ?>">
            </div>

            <div class="form-group">
                <label>誕生日年</label>
                <select name="year" class="form-control">
                    <option value="" name="year">--年--</option>
                    <?php foreach (range(date('Y'), 1900) as $year) : ?>
                        <option value="<?= $year ?>" name="year" <?= Form::selected($member->value['year'], $year) ?>><?= $year ?>年</option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label>性別</label>
                <div>
                    <input id="male" type="radio" name="gender" value="male" <?= Form::checked($member->value['gender'], 'male') ?>>
                    <label for="male">男性</label>
                    <input id="female" type="radio" name="gender" value="female" <?= Form::checked($member->value['gender'], 'female') ?>>
                    <label for="female">女性</label>
                </div>
            </div>

            <div>
                <button class="btn btn-primary">確認</button>
            </div>
        </form>
    </div>
</body>

</html>