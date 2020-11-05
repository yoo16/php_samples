<?php
    if ($_GET) {
        var_dump($_GET);
    }
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
    <form action="lesson1.php" method="get">
        メールアドレス
        <input type="text" name="email" value="">
        <button>GET送信</button>
    </form>
</body>

</html>