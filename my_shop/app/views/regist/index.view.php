<!DOCTYPE html>
<html lang="ja">

<?php include 'app/views/components/head.php' ?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="h2 text-center p-3">会員登録</h2>
                <form action="confirm.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control <?= View::invalid(@$errors['name']) ?>" name="name" value="<?= @$user['name'] ?>">
                        <label for="">氏名</label>
                        <p class="text-danger"><?= @$errors['name'] ?></p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control <?= View::invalid(@$errors['email']) ?>" name="email" value="<?= @$user['email'] ?>">
                        <label for="">メールアドレス</label>
                        <p class="text-danger"><?= @$errors['email'] ?></p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control <?= View::invalid(@$errors['password']) ?>" name="password">
                        <label for="">パスワード</label>
                        <p class="text-danger"><?= @$errors['password'] ?></p>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary">確認</button>
                    </div>
                    <div class="text-center m-3">
                        <a href="../login/" class="btn btn-outline-primary">ログイン</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>