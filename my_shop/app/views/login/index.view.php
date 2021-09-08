<!DOCTYPE html>
<html lang="ja">

<?php include 'app/views/components/head.php' ?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="h2 text-center p-3">ログイン</h2>
                <form action="auth.php" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control <?= View::invalid(@$errors['email']) ?>" type="email" name="email" value="<?= @$user->value['email'] ?>">
                        <label for="">メールアドレス</label>
                        <p class="text-danger"><?= @$errors['email'] ?></p>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control <?= View::invalid(@$errors['password']) ?>" type="password" name="password">
                        <label for="">パスワード</label>
                        <p class="text-danger"><?= @$errors['password'] ?></p>
                    </div>
                    <div class="text-center m-3">
                        <button class="btn btn-primary">ログイン</button>
                    </div>
                    <div class="text-center m-3">
                        <a href="../regist/" class="btn btn-outline-primary">会員登録</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>