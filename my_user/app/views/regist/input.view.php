<form action="<?= Route::url('/regist/confirm.php') ?>" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h2 class="h2">ユーザ登録</h2>
        </div>
        <div class="card-body">
            <div>
                <label>氏名</label>
                <input class="form-control" type="text" name="name" value="<?= @$posts['name'] ?>" required>
                <p class="text-danger">
                    <?= @$errors['name']  ?>
                </p>
            </div>

            <div>
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="<?= @$posts['email'] ?>" required>
                <p class="text-danger">
                    <?= @$errors['email']  ?>
                </p>
            </div>

            <div>
                <label>パスワード</label>
                <input class="form-control" type="password" name="password" value="" required>
                <p class="text-danger">
                    <?= @$errors['password']  ?>
                </p>
            </div>
        </div>

        <div class="card-footer">
            <div class="row justify-content-center">
                <button class="btn btn-primary">確認</button>
            </div>
        </div>
    </div>
</form>