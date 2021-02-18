<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="none,noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Shop</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= Route::url('') ?>">Shopping</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if (empty($user)) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Route::url('/user/login.php') ?>">ログイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Route::url('/regist/') ?>">ユーザ登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Route::url('/item/') ?>">商品</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Route::url('/user/logout.php') ?>">ログアウト</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php include($view_path) ?>
    </div>

</body>

</html>