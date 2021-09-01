<?php
session_start();
session_regenerate_id(true);

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
} else {
    header('Location: input.php');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="h2 text-center p-3">会員登録</h2>
                <div class="text-center">
                    <p>会員登録が完了しました。</p>
                    <a href="input.php" class="btn btn-outline-primary">戻る</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>