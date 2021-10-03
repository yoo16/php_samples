<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="h2 text-center p-3">会員登録</h2>
                <form action="confirm.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" value="">
                        <label for="">氏名</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="">
                        <label for="">メールアドレス</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password">
                        <label for="">パスワード</label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary">確認</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>