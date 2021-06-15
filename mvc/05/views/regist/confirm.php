<!DOCTYPE html>
<html lang="ja">

<?php include('views/components/header.php') ?>

<body>
    <div class="container">
        <h2 class="h2">会員登録</h2>

        <?php if (empty($errors)) : ?>
            <p>
                この内容で登録しますか？
            </p>
        <?php else : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <div class="form-group">
            <label for="" class="col-2">氏名</label>
            <?= $member->value['name'] ?>
        </div>

        <div class="form-group">
            <label for="" class="col-2">ふりがな</label>
            <?= $member->value['kana'] ?>
        </div>

        <div class="form-group">
            <label for="" class="col-2">メールアドレス</label>
            <?= $member->value['email'] ?>
        </div>

        <div class="form-group">
            <label for="" class="col-2">電話番号</label>
            <?= $member->value['tel'] ?>
        </div>

        <div class="form-group">
            <label for="" class="col-2">誕生日年</label>
            <?= $member->value['year'] ?>年
        </div>

        <div class="form-group">
            <label for="" class="col-2">性別</label>
            <?= $genders[$member->value['gender']] ?>
        </div>

        <div>
            <form action="result.php" method="post">
                <?php if (empty($member->errors)) : ?>
                    <!-- エラーがなければ -->
                    <button class="btn btn-primary">登録</button>
                <?php endif ?>
                <a href="input.php" class="btn btn-outline-primary">戻る</a>
            </form>
        </div>
    </div>
</body>

</html>