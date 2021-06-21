<!DOCTYPE html>
<html lang="ja">

<?php include('views/components/header.php') ?>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
	<?php include('views/components/error_message.php') ?>

        <form action="result" method="post">
            <div class="form-group">
                <label class="col-sm-2 col-form-label">氏名</label>
                <?= $member->value['name'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">かな</label>
                <?= $member->value['kana'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">メールアドレス</label>
                <?= $member->value['email'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">電話番号</label>
                <?= $member->value['tel'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">誕生日年</label>
                <?= $member->value['year'] ?> 年
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">性別</label>
                <?= Form::gender($member->value['gender']) ?>
            </div>

            <div>
                <a href="input" class="btn btn-outline-primary">戻る</a>
                <?php if (empty($member->errors)) : ?>
                    <button class="btn btn-primary">登録</button>
                <?php endif ?>
            </div>
        </form>
    </div>
</body>

</html>