<div>
    <p class="alert alert-info">
        この内容でよろしいですか？
    </p>
</div>

<form action="add.php" method="post">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>氏名:</label>
                <?= @$posts['name'] ?>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <?= @$posts['email'] ?>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-center">
                <button class="btn btn-primary mr-1">登録</button>

                <a class="btn btn-outline-primary" href="<?= Route::url('/regist/index.php') ?>">戻る</a>
            </div>
        </div>
    </div>
</form>