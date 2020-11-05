<?php
if ($_GET) {
    $email = $_GET['email'];
} else if ($_POST) {
    $email = $_POST['email'];
}
// var_dump($_SERVER['REQUEST_METHOD']);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>

<body>
    <h2>GET</h2>
    <form action="lesson3.php" method="get">
        メールアドレス
        <input type="text" name="email" value="">
        <button>GET送信</button>
    </form>
    <a href="?email=test">GETリクエスト</a>

    <h2>POST</h2>
    <form action="lesson3.php" method="post">
        メールアドレス
        <input type="text" name="email" value="">
        <button>POST送信</button>
    </form>
    <h3>メールアドレス</h3>
    <?php
    echo $email;
    ?>
    <h3>リクエストメソッド</h3>
    <?php
    echo $_SERVER['REQUEST_METHOD'];
    ?>
</body>

</html>