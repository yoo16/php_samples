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
    <?php if (isset($_GET['email'])): ?>
    <h2 class="h2">Result</h2>
    <?= $_GET['email'] ?>
    <?php endif ?>
</body>

</html>