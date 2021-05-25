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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <p class="alert alert-info">
            会員登録が完了しました。
        </p>
    </div>
</body>

</html>