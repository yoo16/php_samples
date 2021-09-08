<!DOCTYPE html>
<html lang="ja">

<?php include 'app/views/components/head.php' ?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="h2 text-center p-3">会員登録</h2>
                <form action="result.php" method="post">
                    <label class="form-label fw-bold" for="">氏名</label>
                    <p><?= $user['name'] ?></p>

                    <label class="form-label fw-bold" for="">メールアドレス</label>
                    <p><?= $user['email'] ?></p>

                    <div class="text-center p-3">
                        <p>この内容で登録しますか？</p>
                        <button class="btn btn-primary">登録</button>
                        <a href="./" class="btn btn-outline-primary">戻る</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>