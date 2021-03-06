<?php
session_start();
session_regenerate_id(true);

if (isset($_SESSION['member'])) {
    //登録処理
    //データベース保存、メール送信など

    //セッションの削除
    unset($_SESSION['member']);
} else {
    //セッションがない場合は、input.php にリダイレクト
    header('Location: input.php');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1 class="h1">会員登録完了</h1>
        <p class="alert alert-info">
            会員登録が完了しました。
        </p>
        <p>
        <a class="btn btn-outline-primary" href="input.php">戻る</a>
        </p>
    </div>
</body>

</html>