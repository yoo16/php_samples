<?php
if ($_GET) {
    var_dump($_GET);
} else if ($_POST) {
    var_dump($_POST);
}
var_dump($_SERVER['REQUEST_METHOD']);
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
    <form action="lesson2.php" method="get">
        メールアドレス
        <input type="text" name="email" value="">
        <button>GET送信</button>
    </form>
    <a href="?email=test">GETリクエスト</a>

    <h2>POST</h2>
    <form action="lesson2.php" method="post">
        メールアドレス
        <input type="text" name="email" value="">
        <button>POST送信</button>
    </form>
</body>

</html>